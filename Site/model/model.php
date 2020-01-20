<?php
function loginCheck($data)
{
    if(@$data['user_login'] == "user" && @$data['user_password'] == '1234')
    {
        return true;
    }
    else
    {
        return false;
    }
}
function registerCheck($data)
{
    $file_to_write = file('model/Users.json');
    if(@$data['user_password'] == @$data['user_password_confirm'])
    {

        $write_to_file = json_decode($file_to_write,true);
        $user =
            array(
            'username' => $data['user_login'],
            'email'=> $data['user_e-mail'],
            'password'=> $data['user_password']
            );
        $write_to_file[]= $user;
        $input_data = json_encode($write_to_file);
        file_put_contents("model/Users.json",$input_data);
        return true;
    }
    else
    {
        return false;
    }
}
?>
