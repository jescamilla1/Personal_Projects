<?php
function is_empty_or_null($variable)
{
    return !isset($variable) || empty($variable);
}

function setDebug($data)
{
    $_SESSION["debug"] = $data;
}

function getDebug($dumpAll = false)
{
    if (isset($_SESSION["debug"]) && !$dumpAll) {

        echo var_export($_SESSION["debug"], true);
        unset($_SESSION["debug"]);
    } else {
        echo var_export($_SESSION, true);
    }
}

function safe($var)
{
    echo htmlentities($var, ENT_QUOTES, "utf-8");
}

function is_logged_in()
{
    return isset($_SESSION["user"]) && isset($_SESSION["user"]["id"]);
}
// get account details
function get_email()
{
    if (is_logged_in()) {
        return $_SESSION["user"]["email"];
    }
    return "";
}

function get_username()
{
    if (is_logged_in()) {
        return $_SESSION["user"]["username"];
    }
    return "";
}
function get_role()
{
    if (is_logged_in()) {
        return $_SESSION["user"]["role"];
    }
    return "No role found";
}

function get_user_id()
{
    if (is_logged_in()) {
        return $_SESSION["user"]["id"];
    }
    return "";
}
