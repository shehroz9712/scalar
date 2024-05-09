<?php

use App\Models\Setting;

function cssAdminFile($file = '')
{
    return asset('assets/admin/css/' . $file);
}

function jsAdminFile($file = '')
{
    return asset('assets/admin/js/' . $file);
}

function imageAdminFile($file = '')
{
    return asset('assets/admin/images/' . $file);
}

function cssFile($file = '')
{
    return asset('assets/user/css/' . $file);
}

function jsFile($file = '')
{
    return asset('assets/user/js/' . $file);
}

function imageFile($file = '')
{
    return asset('assets/user/img/' . $file);
}
function uploads($file)
{
    return asset('assets/uploads/' . $file);
}

function uploadImage($image, $folder)
{
    if ($image  && $image != null) {
        $getClientMimeType = explode('/', $image->getClientMimeType());
        $extension = $image->getClientOriginalExtension();

        // Generate a unique image name using a random string and the current timestamp
        $image_name =  time() . '.' . $extension;

        // Move the image to the desired folder
        $image->move(public_path('uploads/' . $folder), $image_name);
    } else {
        $image_name = 'no-image.png';
    }
    return $image_name;
}


function getTitle()
{
    return Setting::value('title');
}

function getEmail()
{
    return Setting::value('email');
}

function getPhone()
{
    return Setting::value('phone');
}

function getAddress()
{
    return Setting::value('address');
}

function getWebsite()
{
    return Setting::value('website');
}

function getLogo()
{
    return asset('assets/uploads/' . Setting::value('logo'));
}

function getDarkLogo()
{
    return asset('assets/uploads/' . Setting::value('dark-logo'));
}
function getFavicon()
{
    return asset('assets/uploads/' . Setting::value('favicon'));
}


function getFacebook()
{
    return Setting::value('facebook');
}

function getTwitter()
{
    return Setting::value('twitter');
}

function getInstagram()
{
    return Setting::value('instagram');
}

function getLinkedin()
{
    return Setting::value('linkedin');
}
function getAppStoreLink()
{
    return Setting::value('app-store-link');
}

function getPlayStoreLink()
{
    return Setting::value('play-store-link');
}


function getFooterScripts()
{
    return Setting::value('footer_scripts');
}

function getFooterSentence()
{
    return Setting::value('footer_sentence');
}

function getCopyright()
{
    return Setting::value('copyright');
}
