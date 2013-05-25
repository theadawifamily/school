<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function smarty_function_get_include_path($params,$smarty)
 {

  

  echo   __SCRIPT_PATH;

 

 }

function smarty_function_menu($params,$smarty)
{
	echo  menu::renderMenu();
}
function smarty_function_check($params,$smarty)
{
        $smarty = new Smarty();
        $smartyKey = $params['key'];
        $smartyValue = $params['value'];
	$roles = users::retrieveRoles();
        foreach($roles as $value)
        {
            foreach($value as $key2=>$value2)
            {
               if($key2 == $smartyKey && $value2 == $smartyValue)
               {
                   echo 'checked';
               }
              
            }
        }
}
function smarty_function_checkBox($params,$smarty)
{
        $name = $params['name'];
        $nameModified = str_replace('.php','',$name);
        $groupId = $params['groupId'];
        $classGroupId = $name.'*'.$groupId;
        if(strstr($name,'Controller.php'))
        {
            $checBox = '<input class="myCheckBox" id="'.$classGroupId.'" type="checkbox" ref="'.$nameModified.$groupId.'">';
            return $checBox;
        } 
}
function smarty_function_getClassMethods($params,$smarty)
{
        $exclusions = array();
        $classMethods = get_class_methods('myRouterBase');
        foreach($classMethods as $baseMethods)
        {
            $exclusions[] = $baseMethods;
        }
        $name = $params['name'];
        $groupId = $params['groupId'];
        $nameModified = str_replace('.php','',$name);
        if(strstr($name,'Controller.php'))
        {
            $className = str_replace('.php','',$name);
            $classMethods = get_class_methods($className);
            $div = '';
            foreach($classMethods as $methods)
            {
                if(!in_array($methods,$exclusions))
                {
                    if (!strstr($methods,'check')&&!strstr($methods,'Mandatory'))
                    {
                        $jsonPath = __INNER_PATH.'includes/config/priv_'.$groupId.'.json';
                        $data = config::mapper($jsonPath);
                        $classMethodName = $className.'*'.$methods.'*'.$groupId;
                        if(is_array($data->$className->method->$groupId))
                        {
                            if(in_array($methods,$data->$className->method->$groupId))
                            {
                                $div = '<div><input class="myMethods" id="'.$classMethodName.'" type="checkbox" name="'.$nameModified.$groupId.'" checked>'.$methods.'</div>'; 
                            }
                            else
                            {
                                $div = '<div><input class="myMethods" id="'.$classMethodName.'" type="checkbox" name="'.$nameModified.$groupId.'">'.$methods.'</div>';
                            }
                        }
                        else
                        {
                            $div = '<div><input class="myMethods" id="'.$classMethodName.'" type="checkbox" name="'.$nameModified.$groupId.'">'.$methods.'</div>';
                        }
                        echo $div;
                    }
                    
                }
               
            }
            
        }
}
function smarty_function_getUserNameSession($params,$smarty)
{
     if($_SESSION['userCredentials'])
     {
         $data = users::getUserFullName();
         $firstName = $data['firstName'];
         $lastName = $data['lastName'];
         if(strlen($lastName > 12))
           {
               $firstName = $firstName[0];
           }
         $div = '<div id="userCredentials">'.$firstName.' '.$lastName.'</div>';
         $div .= '<div id="userLogout"><a href = "'.__LINK_PATH.'login/end/">Log off</a></div>';
         echo $div;
     }
    else 
     {
         $div .= '<div id="userLogout"><a href = "'.__LINK_PATH.'login/start/">Log in</a></div>';
         echo $div;
     }
}
