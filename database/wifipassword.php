<?php

function getUsers()
{
    $json_arr = json_decode(file_get_contents(__DIR__ . '/wifipassword.json'), true);
    $users = $json_arr;
    if (is_array($users) || is_object($users)) {
        foreach ($users as $arr) {
            if (is_array($arr) || is_object($arr)) {
                foreach ($arr as $v) {
                    return $v;
                }
            }
        }
    }
}


function getUserById($id)
{

    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function createUser($data)
{
    $users = getUsers();
    $data['id'] = rand(1000000, 2000000);
    $users[] = $data;
    putJson($users);
    return $data;
}



function updateUser($data, $id)
{
    $users = getUsers();
    foreach ($users as $key => $user) {
        if ($user['id'] == $id) {
            $users[$key] = array_merge($user, $data);
        }
    }
    putJson($users);
}


function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $key => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $key, 1);
        }
        putJson($users);
    }
}


function uploadImage($file, $user)
{
    if (isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        $fileName = $file['name'];
        $dotPosition = strpos($fileName, '.');
        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user['id']}.$extension");

        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }
}


function putJson($users)
{
    file_put_contents(__DIR__ . '/wifipassword.json', json_encode([
        "data" => [
            "Data" => $users
        ]
    ], JSON_PRETTY_PRINT), true);
}

function validateUser($user, &$errors)
{

    $isValid = true;

    if (!$user['outletname']) {
        $isValid = false;
        $errors['outletname'] = 'Name is mandatory';
    }
   

    return $isValid;
}
