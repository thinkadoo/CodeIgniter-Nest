<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
#==========================================================================
# Notes on HTMLPurifier
#==========================================================================
# This helper info came from: http://codeigniter.com/wiki/htmlpurifier/
# The use of htmlpurifier means using it as a helper and not a plugin.

# This is because with CodeIgniter Reactor's arrival in early 2011, there
# was a need to remove plugins (which were redundant with helpers).
# see this changelog for details:
# http://codeigniter.com/user_guide/changelog.html

# It has been installed as part of the autoload (app/config/autoload.php)
# because dealing with XSS is that important.

function purify($dirty_html)
{

    if (is_array($dirty_html)) {
        foreach ($dirty_html as $key => $val)
        {
            $dirty_html[$key] = purify($val);
        }

        return $dirty_html;
    }

    if (trim($dirty_html) === '') {
        return $dirty_html;
    }

    require_once(APPPATH . "helpers/htmlpurifier-4.3.0/library/HTMLPurifier.auto.php");
    require_once(APPPATH . "helpers/htmlpurifier-4.3.0/library/HTMLPurifier.func.php");

    $config = HTMLPurifier_Config::createDefault();

    //$config->set('HTML','Doctype', 'XHTML 1.0 Strict');
    $config->set('HTML.Doctype', 'XHTML 1.0 Strict');

    return HTMLPurifier($dirty_html, $config);

}

?>