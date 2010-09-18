<?php
/**
 * ThinkUp's Smarty object
 *
 * Configures and initalizes Smarty per ThinkUp's configuration.
 *
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 *
 */
class SmartyThinkUp extends Smarty {

    /**
     * @var boolean
     */
    private $debug = false;

    /**
     * @var array
     */
    private $template_data = array();
    /**
     * Constructor
     *
     * Sets default values all view templates have access to:
     *
     *  <code>
     *  //path of the ThinkUp installation site root as defined in config.inc.php
     *  {$site_root_path}
     *  //file the ThinkUp logo links to, 'index.php' by default
     *  {$logo_link}
     *  //application name
     *  {$app_title}
     *  </code>
     *  @param array $config_array Defaults to null; Override source_root_path, site_root_path, app_title, cache_pages,
     *  debug
     *
     */
    public function __construct($config_array=null) {
        if ($config_array==null) {
            $config = Config::getInstance();
            $config_array = $config->getValuesArray();
        }

        $src_root_path = $config_array['source_root_path'];
        $site_root_path = $config_array['site_root_path'];
        $app_title = $config_array['app_title'];
        $cache_pages = $config_array['cache_pages'];
        $debug =  $config_array['debug'];
        Utils::defineConstants();

        $this->Smarty();
        $this->template_dir = array( THINKUP_WEBAPP_PATH.'_lib/view', $src_root_path.'tests/view');
        $this->compile_dir = THINKUP_WEBAPP_PATH.'_lib/view/compiled_view/';
        $this->plugins_dir = array('plugins', THINKUP_WEBAPP_PATH.'_lib/view/plugins/');
        $this->cache_dir = THINKUP_WEBAPP_PATH.'_lib/view/compiled_view/cache';
        $this->caching = ($cache_pages)?1:0;
        $this->cache_lifetime = 300;
        $this->debug = $debug;

        $this->assign('app_title', $app_title);
        $this->assign('site_root_path', $site_root_path);
        $this->assign('logo_link', 'index.php');
    }

    /**
     * Assigns data to a template variable.
     * If debug is true, stores it for access by tests or developer.
     * @param string $key
     * @param mixed $value
     */
    public function assign($key, $value) {
        parent::assign($key, $value);
        if ($this->debug) {
            $this->template_data[$key] = $value;
        }
    }

    /**
     * For use only by tests: return a template data value by key.
     * @param string $key
     */
    public function getTemplateDataItem($key) {
        return isset($this->template_data[$key]) ? $this->template_data[$key]:null;
    }

    /**
     * Check if caching is enabled
     * @return bool
     */
    public function isViewCached() {
        return ($this->caching==1)?true:false;
    }

    /**
     * Turn off caching
     */
    public function disableCaching() {
        $this->caching=0;
    }

    /**
     * Override the parent's fetch method to handle an unwritable compilation directory.
     * @param str $template Template name
     * @param str $cache_key Cache key
     * @param str Results
     */
    public function fetch($template, $cache_key=null) {
        if (! is_writable($this->compile_dir) || ! is_writable($this->compile_dir.'/cache') ) {
            Utils::defineConstants();
            $whoami = exec('whoami');
            if (empty($whoami)) {
                $whoami = 'nobody';
            }
            return str_replace(array('#THINKUP_BASE_URL#', '#WHOAMI#', '#COMPILE_DIR#'),
            array(THINKUP_BASE_URL, $whoami, $this->compile_dir),
            file_get_contents(THINKUP_WEBAPP_PATH.'_lib/view/500-perm.html'));
        } else {
            if ($cache_key != null) {
                return parent::fetch($template, $cache_key);
            } else {
                return parent::fetch($template);
            }
        }
    }
}
