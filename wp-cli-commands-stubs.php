<?php
/**
 * Generated stub declarations for WP-CLI
 * @see https://wp-cli.org/
 * @see https://github.com/php-stubs/wp-cli-stubs
 */

namespace {
    /**
     * Base class for WP-CLI commands
     *
     * @package wp-cli
     */
    abstract class WP_CLI_Command
    {
        public function __construct()
        {
        }
    }
    /**
     * Adds, removes, fetches, and flushes the WP Object Cache object.
     *
     * By default, the WP Object Cache exists in PHP memory for the length of the
     * request (and is emptied at the end). Use a persistent object cache drop-in
     * to persist the object cache between requests.
     *
     * [Read the codex article](https://codex.wordpress.org/Class_Reference/WP_Object_Cache)
     * for more detail.
     *
     * ## EXAMPLES
     *
     *     # Set cache.
     *     $ wp cache set my_key my_value my_group 300
     *     Success: Set object 'my_key' in group 'my_group'.
     *
     *     # Get cache.
     *     $ wp cache get my_key my_group
     *     my_value
     *
     * @package wp-cli
     */
    class Cache_Command extends \WP_CLI_Command
    {
        /**
         * Adds a value to the object cache.
         *
         * Errors if a value already exists for the key, which means the value can't
         * be added.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * <value>
         * : Value to add to the key.
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * [<expiration>]
         * : Define how long to keep the value, in seconds. `0` means as long as possible.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     # Add cache.
         *     $ wp cache add my_key my_group my_value 300
         *     Success: Added object 'my_key' in group 'my_value'.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Decrements a value in the object cache.
         *
         * Errors if the value can't be decremented.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * [<offset>]
         * : The amount by which to decrement the item's value.
         * ---
         * default: 1
         * ---
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * ## EXAMPLES
         *
         *     # Decrease cache value.
         *     $ wp cache decr my_key 2 my_group
         *     48
         */
        public function decr($args, $assoc_args)
        {
        }
        /**
         * Removes a value from the object cache.
         *
         * Errors if the value can't be deleted.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * ## EXAMPLES
         *
         *     # Delete cache.
         *     $ wp cache delete my_key my_group
         *     Success: Object deleted.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Flushes the object cache.
         *
         * For WordPress multisite instances using a persistent object cache,
         * flushing the object cache will typically flush the cache for all sites.
         * Beware of the performance impact when flushing the object cache in
         * production.
         *
         * Errors if the object cache can't be flushed.
         *
         * ## EXAMPLES
         *
         *     # Flush cache.
         *     $ wp cache flush
         *     Success: The cache was flushed.
         */
        public function flush($args, $assoc_args)
        {
        }
        /**
         * Gets a value from the object cache.
         *
         * Errors if the value doesn't exist.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get cache.
         *     $ wp cache get my_key my_group
         *     my_value
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Increments a value in the object cache.
         *
         * Errors if the value can't be incremented.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * [<offset>]
         * : The amount by which to increment the item's value.
         * ---
         * default: 1
         * ---
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * ## EXAMPLES
         *
         *     # Increase cache value.
         *     $ wp cache incr my_key 2 my_group
         *     50
         */
        public function incr($args, $assoc_args)
        {
        }
        /**
         * Replaces a value in the object cache, if the value already exists.
         *
         * Errors if the value can't be replaced.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * <value>
         * : Value to replace.
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * [<expiration>]
         * : Define how long to keep the value, in seconds. `0` means as long as possible.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     # Replace cache.
         *     $ wp cache replace my_key new_value my_group
         *     Success: Replaced object 'my_key' in group 'my_group'.
         */
        public function replace($args, $assoc_args)
        {
        }
        /**
         * Sets a value to the object cache, regardless of whether it already exists.
         *
         * Errors if the value can't be set.
         *
         * ## OPTIONS
         *
         * <key>
         * : Cache key.
         *
         * <value>
         * : Value to set on the key.
         *
         * [<group>]
         * : Method for grouping data within the cache which allows the same key to be used across groups.
         * ---
         * default: default
         * ---
         *
         * [<expiration>]
         * : Define how long to keep the value, in seconds. `0` means as long as possible.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     # Set cache.
         *     $ wp cache set my_key my_value my_group 300
         *     Success: Set object 'my_key' in group 'my_group'.
         */
        public function set($args, $assoc_args)
        {
        }
        /**
         * Attempts to determine which object cache is being used.
         *
         * Note that the guesses made by this function are based on the
         * WP_Object_Cache classes that define the 3rd party object cache extension.
         * Changes to those classes could render problems with this function's
         * ability to determine which object cache is being used.
         *
         * ## EXAMPLES
         *
         *     # Check cache type.
         *     $ wp cache type
         *     Default
         */
        public function type($args, $assoc_args)
        {
        }
    }
    /**
     * Adds, gets, and deletes entries in the WordPress Transient Cache.
     *
     * By default, the transient cache uses the WordPress database to persist values
     * between requests. On a single site installation, values are stored in the
     * `wp_options` table. On a multisite installation, values are stored in the
     * `wp_options` or the `wp_sitemeta` table, depending on use of the `--network`
     * flag.
     *
     * When a persistent object cache drop-in is installed (e.g. Redis or Memcached),
     * the transient cache skips the database and simply wraps the WP Object Cache.
     *
     * ## EXAMPLES
     *
     *     # Set transient.
     *     $ wp transient set sample_key "test data" 3600
     *     Success: Transient added.
     *
     *     # Get transient.
     *     $ wp transient get sample_key
     *     test data
     *
     *     # Delete transient.
     *     $ wp transient delete sample_key
     *     Success: Transient deleted.
     *
     *     # Delete expired transients.
     *     $ wp transient delete --expired
     *     Success: 12 expired transients deleted from the database.
     *
     *     # Delete all transients.
     *     $ wp transient delete --all
     *     Success: 14 transients deleted from the database.
     */
    class Transient_Command extends \WP_CLI_Command
    {
        /**
         * Gets a transient value.
         *
         * For a more complete explanation of the transient cache, including the
         * network|site cache, please see docs for `wp transient`.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the transient.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * [--network]
         * : Get the value of a network|site transient. On single site, this is
         * is a specially-named cache key. On multisite, this is a global cache
         * (instead of local to the site).
         *
         * ## EXAMPLES
         *
         *     $ wp transient get sample_key
         *     test data
         *
         *     $ wp transient get random_key
         *     Warning: Transient with key "random_key" is not set.
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Sets a transient value.
         *
         * `<expiration>` is the time until expiration, in seconds.
         *
         * For a more complete explanation of the transient cache, including the
         * network|site cache, please see docs for `wp transient`.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the transient.
         *
         * <value>
         * : Value to be set for the transient.
         *
         * [<expiration>]
         * : Time until expiration, in seconds.
         *
         * [--network]
         * : Set the value of a network|site transient. On single site, this is
         * is a specially-named cache key. On multisite, this is a global cache
         * (instead of local to the site).
         *
         * ## EXAMPLES
         *
         *     $ wp transient set sample_key "test data" 3600
         *     Success: Transient added.
         */
        public function set($args, $assoc_args)
        {
        }
        /**
         * Deletes a transient value.
         *
         * For a more complete explanation of the transient cache, including the
         * network|site cache, please see docs for `wp transient`.
         *
         * ## OPTIONS
         *
         * [<key>]
         * : Key for the transient.
         *
         * [--network]
         * : Delete the value of a network|site transient. On single site, this is
         * is a specially-named cache key. On multisite, this is a global cache
         * (instead of local to the site).
         *
         * [--all]
         * : Delete all transients.
         *
         * [--expired]
         * : Delete all expired transients.
         *
         * ## EXAMPLES
         *
         *     # Delete transient.
         *     $ wp transient delete sample_key
         *     Success: Transient deleted.
         *
         *     # Delete expired transients.
         *     $ wp transient delete --expired
         *     Success: 12 expired transients deleted from the database.
         *
         *     # Delete expired site transients.
         *     $ wp transient delete --expired --network
         *     Success: 1 expired transient deleted from the database.
         *
         *     # Delete all transients.
         *     $ wp transient delete --all
         *     Success: 14 transients deleted from the database.
         *
         *     # Delete all site transients.
         *     $ wp transient delete --all --network
         *     Success: 2 transients deleted from the database.
         *
         *     # Delete all transients in a multsite.
         *     $ wp transient delete --all --network && wp site list --field=url | xargs -n1 -I % wp --url=% transient delete --all
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Determines the type of transients implementation.
         *
         * Indicates whether the transients API is using an object cache or the
         * database.
         *
         * For a more complete explanation of the transient cache, including the
         * network|site cache, please see docs for `wp transient`.
         *
         * ## EXAMPLES
         *
         *     $ wp transient type
         *     Transients are saved to the database.
         */
        public function type()
        {
        }
        /**
         * Lists transients and their values.
         *
         * ## OPTIONS
         *
         * [--search=<pattern>]
         * : Use wildcards ( * and ? ) to match transient name.
         *
         * [--exclude=<pattern>]
         * : Pattern to exclude. Use wildcards ( * and ? ) to match transient name.
         *
         * [--network]
         * : Get the values of network|site transients. On single site, this is
         * a specially-named cache key. On multisite, this is a global cache
         * (instead of local to the site).
         *
         * [--unserialize]
         * : Unserialize transient values in output.
         *
         * [--human-readable]
         * : Human-readable output for expirations.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * This field will be displayed by default for each matching option:
         *
         * * name
         * * value
         * * expiration
         *
         * ## EXAMPLES
         *
         *     # List all transients
         *     $ wp transient list
         *      +------+-------+---------------+
         *      | name | value | expiration    |
         *      +------+-------+---------------+
         *      | foo  | bar   | 39 mins       |
         *      | foo2 | bar2  | no expiration |
         *      | foo3 | bar2  | expired       |
         *      | foo4 | bar4  | 4 hours       |
         *      +------+-------+---------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Retrieves the expiration time.
         *
         * @param string $name              Transient name.
         * @param bool   $is_site_transient Optional. Whether this is a site transient. Default false.
         * @param bool   $human_readable    Optional. Whether to return the difference between now and the
         *                                  expiration time in a human-readable format. Default false.
         * @return string Expiration time string.
         */
        private function get_transient_expiration($name, $is_site_transient = \false, $human_readable = \false)
        {
        }
        /**
         * Deletes all expired transients.
         *
         * Only deletes the expired transients from the database.
         *
         * @param bool $network Whether to delete transients or network|site transients.
         */
        private function delete_expired($network)
        {
        }
        /**
         * Deletes all transients.
         *
         * Only deletes the transients from the database.
         *
         * @param bool $network Whether to delete transients or network|site transients.
         */
        private function delete_all($network)
        {
        }
    }
    /**
     * Base command that all checksum commands rely on.
     *
     * @package wp-cli
     */
    class Checksum_Base_Command extends \WP_CLI_Command
    {
        /**
         * Normalizes directory separators to slashes.
         *
         * @param string $path Path to convert.
         *
         * @return string Path with all backslashes replaced by slashes.
         */
        public static function normalize_directory_separators($path)
        {
        }
        /**
         * Read a remote file and return its contents.
         *
         * @param string $url URL of the remote file to read.
         *
         * @return mixed
         */
        protected static function _read($url)
        {
        }
        /**
         * Recursively get the list of files for a given path.
         *
         * @param string $path Root path to start the recursive traversal in.
         *
         * @return array<string>
         */
        protected function get_files($path)
        {
        }
        /**
         * Whether to include the file in the verification or not.
         *
         * Can be overridden in subclasses.
         *
         * @param string $filepath Path to a file.
         *
         * @return bool
         */
        protected function filter_file($filepath)
        {
        }
    }
    /**
     * Verifies core file integrity by comparing to published checksums.
     *
     * @package wp-cli
     */
    class Checksum_Core_Command extends \Checksum_Base_Command
    {
        /**
         * Verifies WordPress files against WordPress.org's checksums.
         *
         * Downloads md5 checksums for the current version from WordPress.org, and
         * compares those checksums against the currently installed files.
         *
         * For security, avoids loading WordPress when verifying checksums.
         *
         * If you experience issues verifying from this command, ensure you are
         * passing the relevant `--locale` and `--version` arguments according to
         * the values from the `Dashboard->Updates` menu in the admin area of the
         * site.
         *
         * ## OPTIONS
         *
         * [--version=<version>]
         * : Verify checksums against a specific version of WordPress.
         *
         * [--locale=<locale>]
         * : Verify checksums against a specific locale of WordPress.
         *
         * ## EXAMPLES
         *
         *     # Verify checksums
         *     $ wp core verify-checksums
         *     Success: WordPress installation verifies against checksums.
         *
         *     # Verify checksums for given WordPress version
         *     $ wp core verify-checksums --version=4.0
         *     Success: WordPress installation verifies against checksums.
         *
         *     # Verify checksums for given locale
         *     $ wp core verify-checksums --locale=en_US
         *     Success: WordPress installation verifies against checksums.
         *
         *     # Verify checksums for given locale
         *     $ wp core verify-checksums --locale=ja
         *     Warning: File doesn't verify against checksum: wp-includes/version.php
         *     Warning: File doesn't verify against checksum: readme.html
         *     Warning: File doesn't verify against checksum: wp-config-sample.php
         *     Error: WordPress installation doesn't verify against checksums.
         *
         * @when before_wp_load
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Whether to include the file in the verification or not.
         *
         * @param string $filepath Path to a file.
         *
         * @return bool
         */
        protected function filter_file($filepath)
        {
        }
        /**
         * Gets version information from `wp-includes/version.php`.
         *
         * @return array {
         *     @type string $wp_version The WordPress version.
         *     @type int $wp_db_version The WordPress DB revision.
         *     @type string $tinymce_version The TinyMCE version.
         *     @type string $wp_local_package The TinyMCE version.
         * }
         */
        private static function get_wp_details()
        {
        }
        /**
         * Searches for the value assigned to variable `$var_name` in PHP code `$code`.
         *
         * This is equivalent to matching the `\$VAR_NAME = ([^;]+)` regular expression and returning
         * the first match either as a `string` or as an `integer` (depending if it's surrounded by
         * quotes or not).
         *
         * @param string $var_name Variable name to search for.
         * @param string $code PHP code to search in.
         *
         * @return int|string|null
         */
        private static function find_var($var_name, $code)
        {
        }
        /**
         * Security copy of the core function with Requests - Gets the checksums for the given version of WordPress.
         *
         * @param string $version Version string to query.
         * @param string $locale  Locale to query.
         * @return bool|array False on failure. An array of checksums on success.
         */
        private static function get_core_checksums($version, $locale)
        {
        }
    }
    /**
     * Verifies plugin file integrity by comparing to published checksums.
     *
     * @package wp-cli
     */
    class Checksum_Plugin_Command extends \Checksum_Base_Command
    {
        /**
         * URL template that points to the API endpoint to use.
         *
         * @var string
         */
        private $url_template = 'https://downloads.wordpress.org/plugin-checksums/{slug}/{version}.json';
        /**
         * Cached plugin data for all installed plugins.
         *
         * @var array|null
         */
        private $plugins_data;
        /**
         * Array of detected errors.
         *
         * @var array
         */
        private $errors = array();
        /**
         * Verifies plugin files against WordPress.org's checksums.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to verify.
         *
         * [--all]
         * : If set, all plugins will be verified.
         *
         * [--strict]
         * : If set, even "soft changes" like readme.txt changes will trigger
         * checksum errors.
         *
         * [--format=<format>]
         * : Render output in a specific format.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - yaml
         *   - count
         * ---
         *
         * ## EXAMPLES
         *
         *     # Verify the checksums of all installed plugins
         *     $ wp plugin verify-checksums --all
         *     Success: Verified 8 of 8 plugins.
         *
         *     # Verify the checksums of a single plugin, Akismet in this case
         *     $ wp plugin verify-checksums akismet
         *     Success: Verified 1 of 1 plugins.
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Adds a new error to the array of detected errors.
         *
         * @param string $plugin_name Name of the plugin that had the error.
         * @param string $file Relative path to the file that had the error.
         * @param string $message Message explaining the error.
         */
        private function add_error($plugin_name, $file, $message)
        {
        }
        /**
         * Gets the currently installed version for a given plugin.
         *
         * @param string $path Relative path to plugin file to get the version for.
         *
         * @return string|false Installed version of the plugin, or false if not
         *                      found.
         */
        private function get_plugin_version($path)
        {
        }
        /**
         * Gets the checksums for the given version of plugin.
         *
         * @param string $version Version string to query.
         * @param string $plugin  plugin string to query.
         *
         * @return bool|array False on failure. An array of checksums on success.
         */
        private function get_plugin_checksums($plugin, $version)
        {
        }
        /**
         * Gets the names of all installed plugins.
         *
         * @return array<string> Names of all installed plugins.
         */
        private function get_all_plugin_names()
        {
        }
        /**
         * Gets the list of files that are part of the given plugin.
         *
         * @param string $path Relative path to the main plugin file.
         *
         * @return array<string> Array of files with their relative paths.
         */
        private function get_plugin_files($path)
        {
        }
        /**
         * Checks the integrity of a single plugin file by comparing it to the
         * officially provided checksum.
         *
         * @param string $path      Relative path to the plugin file to check the
         *                          integrity of.
         * @param array  $checksums Array of provided checksums to compare against.
         *
         * @return true|string
         */
        private function check_file_checksum($path, $checksums)
        {
        }
        /**
         * Checks whether the current environment supports 256-bit SHA-2.
         *
         * Should be supported for PHP 5+, but we might find edge cases depending on
         * host.
         *
         * @return bool
         */
        private function supports_sha256()
        {
        }
        /**
         * Gets the 256-bit SHA-2 of a given file.
         *
         * @param string $filepath Absolute path to the file to calculate the SHA-2
         *                         for.
         *
         * @return string
         */
        private function get_sha256($filepath)
        {
        }
        /**
         * Gets the MD5 of a given file.
         *
         * @param string $filepath Absolute path to the file to calculate the MD5
         *                         for.
         *
         * @return string
         */
        private function get_md5($filepath)
        {
        }
        /**
         * Gets the absolute path to a relative plugin file.
         *
         * @param string $path Relative path to get the absolute path for.
         *
         * @return string
         */
        private function get_absolute_path($path)
        {
        }
        /**
         * Returns a list of files that only trigger checksum errors in strict mode.
         *
         * @return array<string> Array of file names.
         */
        private function get_soft_change_files()
        {
        }
        /**
         * Checks whether a given file will only trigger checksum errors in strict
         * mode.
         *
         * @param string $file File to check.
         *
         * @return bool Whether the file only triggers checksum errors in strict
         * mode.
         */
        private function is_soft_change_file($file)
        {
        }
    }
}
namespace WP_CLI\Dispatcher {
    /**
     * A non-leaf node in the command tree.
     * Contains one or more Subcommands.
     *
     * @package WP_CLI
     */
    class CompositeCommand
    {
        protected $name;
        protected $shortdesc;
        protected $synopsis;
        protected $docparser;
        protected $parent;
        protected $subcommands = array();
        /**
         * Instantiate a new CompositeCommand
         *
         * @param mixed $parent Parent command (either Root or Composite)
         * @param string $name Represents how command should be invoked
         * @param \WP_CLI\DocParser
         */
        public function __construct($parent, $name, $docparser)
        {
        }
        /**
         * Get the parent composite (or root) command
         *
         * @return mixed
         */
        public function get_parent()
        {
        }
        /**
         * Add a named subcommand to this composite command's
         * set of contained subcommands.
         *
         * @param string $name Represents how subcommand should be invoked
         * @param Subcommand|CompositeCommand
         */
        public function add_subcommand($name, $command)
        {
        }
        /**
         * Remove a named subcommand from this composite command's set of contained
         * subcommands
         *
         * @param string $name Represents how subcommand should be invoked
         */
        public function remove_subcommand($name)
        {
        }
        /**
         * Composite commands always contain subcommands.
         *
         * @return true
         */
        public function can_have_subcommands()
        {
        }
        /**
         * Get the subcommands contained by this composite
         * command.
         *
         * @return array
         */
        public function get_subcommands()
        {
        }
        /**
         * Get the name of this composite command.
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get the short description for this composite
         * command.
         *
         * @return string
         */
        public function get_shortdesc()
        {
        }
        /**
         * Set the short description for this composite command.
         *
         * @param string
         */
        public function set_shortdesc($shortdesc)
        {
        }
        /**
         * Get the long description for this composite
         * command.
         *
         * @return string
         */
        public function get_longdesc()
        {
        }
        /**
         * Set the long description for this composite command
         *
         * @param string
         */
        public function set_longdesc($longdesc)
        {
        }
        /**
         * Get the synopsis for this composite command.
         * As a collection of subcommands, the composite
         * command is only intended to invoke those
         * subcommands.
         *
         * @return string
         */
        public function get_synopsis()
        {
        }
        /**
         * Get the usage for this composite command.
         *
         * @return string
         */
        public function get_usage($prefix)
        {
        }
        /**
         * Show the usage for all subcommands contained
         * by the composite command.
         */
        public function show_usage()
        {
        }
        /**
         * When a composite command is invoked, it shows usage
         * docs for its subcommands.
         *
         * @param array $args
         * @param array $assoc_args
         * @param array $extra_args
         */
        public function invoke($args, $assoc_args, $extra_args)
        {
        }
        /**
         * Given supplied arguments, find a contained
         * subcommand
         *
         * @param array $args
         * @return \WP_CLI\Dispatcher\Subcommand|false
         */
        public function find_subcommand(&$args)
        {
        }
        /**
         * Get any registered aliases for this composite command's
         * subcommands.
         *
         * @param array $subcommands
         * @return array
         */
        private static function get_aliases($subcommands)
        {
        }
        /**
         * Composite commands can only be known by one name.
         *
         * @return false
         */
        public function get_alias()
        {
        }
        /***
         * Get the list of global parameters
         *
         * @param string $root_command whether to include or not root command specific description
         * @return string
         */
        protected function get_global_params($root_command = false)
        {
        }
    }
    /**
     * Adds a command namespace without actual functionality.
     *
     * This is meant to provide the means to attach meta information to a namespace
     * when there's no actual command needed.
     *
     * In case a real command gets registered for the same name, it replaces the
     * command namespace.
     *
     * @package WP_CLI
     */
    class CommandNamespace extends \WP_CLI\Dispatcher\CompositeCommand
    {
        /**
         * Show the usage for all subcommands contained
         * by the composite command.
         */
        public function show_usage()
        {
        }
    }
}
namespace {
    /**
     * Downloads, installs, updates, and manages a WordPress installation.
     */
    final class Core_Command_Namespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
    /**
     * Manages plugins, including installs, activations, and updates.
     */
    final class Plugin_Command_Namespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
}
namespace WP_CLI\Fetchers {
    /**
     * Fetch a WordPress entity for use in a subcommand.
     */
    abstract class Base
    {
        /**
         * @var string $msg The message to display when an item is not found
         */
        protected $msg;
        /**
         * @param string $arg The raw CLI argument
         * @return mixed|false The item if found; false otherwise
         */
        public abstract function get($arg);
        /**
         * Like get(), but calls WP_CLI::error() instead of returning false.
         *
         * @param string $arg The raw CLI argument
         */
        public function get_check($arg)
        {
        }
        /**
         * @param array The raw CLI arguments
         * @return array The list of found items
         */
        public function get_many($args)
        {
        }
    }
    /**
     * Fetch a WordPress plugin based on one of its attributes.
     *
     * This is a special version of the plugin fetcher. It doesn't use the
     * `all_plugins` filter, so that plugins cannot hide themselves from the
     * checks.
     *
     */
    class UnfilteredPlugin extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = "The '%s' plugin could not be found.";
        /**
         * Get a plugin object by name.
         *
         * @param string $name
         *
         * @return object|false
         */
        public function get($name)
        {
        }
    }
}
namespace {
    /**
     * Generates and reads the wp-config.php file.
     */
    class Config_Command extends \WP_CLI_Command
    {
        /**
         * Retrieve the initiale locale from the WordPress version file.
         *
         * @return string Initial locale if present, or an empty string if not.
         */
        private static function get_initial_locale()
        {
        }
        /**
         * Generates a wp-config.php file.
         *
         * Creates a new wp-config.php with database constants, and verifies that
         * the database constants are correct.
         *
         * ## OPTIONS
         *
         * --dbname=<dbname>
         * : Set the database name.
         *
         * --dbuser=<dbuser>
         * : Set the database user.
         *
         * [--dbpass=<dbpass>]
         * : Set the database user password.
         *
         * [--dbhost=<dbhost>]
         * : Set the database host.
         * ---
         * default: localhost
         * ---
         *
         * [--dbprefix=<dbprefix>]
         * : Set the database table prefix.
         * ---
         * default: wp_
         * ---
         *
         * [--dbcharset=<dbcharset>]
         * : Set the database charset.
         * ---
         * default: utf8
         * ---
         *
         * [--dbcollate=<dbcollate>]
         * : Set the database collation.
         * ---
         * default:
         * ---
         *
         * [--locale=<locale>]
         * : Set the WPLANG constant. Defaults to $wp_local_package variable.
         *
         * [--extra-php]
         * : If set, the command copies additional PHP code into wp-config.php from STDIN.
         *
         * [--skip-salts]
         * : If set, keys and salts won't be generated, but should instead be passed via `--extra-php`.
         *
         * [--skip-check]
         * : If set, the database connection is not checked.
         *
         * [--force]
         * : Overwrites existing files, if present.
         *
         * ## EXAMPLES
         *
         *     # Standard wp-config.php file
         *     $ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO
         *     Success: Generated 'wp-config.php' file.
         *
         *     # Enable WP_DEBUG and WP_DEBUG_LOG
         *     $ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php <<PHP
         *     define( 'WP_DEBUG', true );
         *     define( 'WP_DEBUG_LOG', true );
         *     PHP
         *     Success: Generated 'wp-config.php' file.
         *
         *     # Avoid disclosing password to bash history by reading from password.txt
         *     # Using --prompt=dbpass will prompt for the 'dbpass' argument
         *     $ wp config create --dbname=testing --dbuser=wp --prompt=dbpass < password.txt
         *     Success: Generated 'wp-config.php' file.
         */
        public function create($_, $assoc_args)
        {
        }
        /**
         * Launches system editor to edit the wp-config.php file.
         *
         * ## EXAMPLES
         *
         *     # Launch system editor to edit wp-config.php file
         *     $ wp config edit
         *
         *     # Edit wp-config.php file in a specific editor
         *     $ EDITOR=vim wp config edit
         *
         * @when before_wp_load
         */
        public function edit()
        {
        }
        /**
         * Gets the path to wp-config.php file.
         *
         * ## EXAMPLES
         *
         *     # Get wp-config.php file path
         *     $ wp config path
         *     /home/person/htdocs/project/wp-config.php
         *
         * @when before_wp_load
         */
        public function path()
        {
        }
        /**
         * Lists variables, constants, and file includes defined in wp-config.php file.
         *
         * ## OPTIONS
         *
         * [<filter>...]
         * : Name or partial name to filter the list by.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * [--strict]
         * : Enforce strict matching when a filter is provided.
         *
         * ## EXAMPLES
         *
         *     # List constants and variables defined in wp-config.php file.
         *     $ wp config list
         *     +------------------+------------------------------------------------------------------+----------+
         *     | key              | value                                                            | type     |
         *     +------------------+------------------------------------------------------------------+----------+
         *     | table_prefix     | wp_                                                              | variable |
         *     | DB_NAME          | wp_cli_test                                                      | constant |
         *     | DB_USER          | root                                                             | constant |
         *     | DB_PASSWORD      | root                                                             | constant |
         *     | AUTH_KEY         | r6+@shP1yO&$)1gdu.hl[/j;7Zrvmt~o;#WxSsa0mlQOi24j2cR,7i+QM/#7S:o^ | constant |
         *     | SECURE_AUTH_KEY  | iO-z!_m--YH$Tx2tf/&V,YW*13Z_HiRLqi)d?$o-tMdY+82pK$`T.NYW~iTLW;xp | constant |
         *     +------------------+------------------------------------------------------------------+----------+
         *
         *     # List only database user and password from wp-config.php file.
         *     $ wp config list DB_USER DB_PASSWORD --strict
         *     +------------------+-------+----------+
         *     | key              | value | type     |
         *     +------------------+-------+----------+
         *     | DB_USER          | root  | constant |
         *     | DB_PASSWORD      | root  | constant |
         *     +------------------+-------+----------+
         *
         *     # List all salts from wp-config.php file.
         *     $ wp config list _SALT
         *     +------------------+------------------------------------------------------------------+----------+
         *     | key              | value                                                            | type     |
         *     +------------------+------------------------------------------------------------------+----------+
         *     | AUTH_SALT        | n:]Xditk+_7>Qi=>BmtZHiH-6/Ecrvl(V5ceeGP:{>?;BT^=[B3-0>,~F5z$(+Q$ | constant |
         *     | SECURE_AUTH_SALT | ?Z/p|XhDw3w}?c.z%|+BAr|(Iv*H%%U+Du&kKR y?cJOYyRVRBeB[2zF-`(>+LCC | constant |
         *     | LOGGED_IN_SALT   | +$@(1{b~Z~s}Cs>8Y]6[m6~TnoCDpE>O%e75u}&6kUH!>q:7uM4lxbB6[1pa_X,q | constant |
         *     | NONCE_SALT       | _x+F li|QL?0OSQns1_JZ{|Ix3Jleox-71km/gifnyz8kmo=w-;@AE8W,(fP<N}2 | constant |
         *     +------------------+------------------------------------------------------------------+----------+
         *
         * @when before_wp_load
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets the value of a specific constant or variable defined in wp-config.php file.
         *
         * ## OPTIONS
         *
         * <name>
         * : Name of the wp-config.php constant or variable.
         *
         * [--type=<type>]
         * : Type of config value to retrieve. Defaults to 'all'.
         * ---
         * default: all
         * options:
         *   - constant
         *   - variable
         *   - all
         * ---
         *
         * [--format=<format>]
         * : Get value in a particular format.
         * ---
         * default: var_export
         * options:
         *   - var_export
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get the table_prefix as defined in wp-config.php file.
         *     $ wp config get table_prefix
         *     wp_
         *
         * @when before_wp_load
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Get the array of wp-config.php constants and variables.
         *
         * @return array
         */
        private static function get_wp_config_vars()
        {
        }
        /**
         * Sets the value of a specific constant or variable defined in wp-config.php file.
         *
         * ## OPTIONS
         *
         * <name>
         * : Name of the wp-config.php constant or variable.
         *
         * <value>
         * : Value to set the wp-config.php constant or variable to.
         *
         * [--add]
         * : Add the value if it doesn't exist yet.
         * This is the default behavior, override with --no-add.
         *
         * [--raw]
         * : Place the value into the wp-config.php file as is, instead of as a quoted string.
         *
         * [--anchor=<anchor>]
         * : Anchor string where additions of new values are anchored around.
         * Defaults to "/* That's all, stop editing!".
         *
         * [--placement=<placement>]
         * : Where to place the new values in relation to the anchor string.
         * ---
         * default: 'before'
         * options:
         *   - before
         *   - after
         * ---
         *
         * [--separator=<separator>]
         * : Separator string to put between an added value and its anchor string.
         * The following escape sequences will be recognized and properly interpreted: '\n' => newline, '\r' => carriage return, '\t' => tab.
         * Defaults to a single EOL ("\n" on *nix and "\r\n" on Windows).
         *
         * [--type=<type>]
         * : Type of the config value to set. Defaults to 'all'.
         * ---
         * default: all
         * options:
         *   - constant
         *   - variable
         *   - all
         * ---
         *
         * ## EXAMPLES
         *
         *     # Set the WP_DEBUG constant to true.
         *     $ wp config set WP_DEBUG true --raw
         *
         * @when before_wp_load
         */
        public function set($args, $assoc_args)
        {
        }
        /**
         * Deletes a specific constant or variable from the wp-config.php file.
         *
         * ## OPTIONS
         *
         * <name>
         * : Name of the wp-config.php constant or variable.
         *
         * [--type=<type>]
         * : Type of the config value to delete. Defaults to 'all'.
         * ---
         * default: all
         * options:
         *   - constant
         *   - variable
         *   - all
         * ---
         *
         * ## EXAMPLES
         *
         *     # Delete the COOKIE_DOMAIN constant from the wp-config.php file.
         *     $ wp config delete COOKIE_DOMAIN
         *
         * @when before_wp_load
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Checks whether a specific constant or variable exists in the wp-config.php file.
         *
         * ## OPTIONS
         *
         * <name>
         * : Name of the wp-config.php constant or variable.
         *
         * [--type=<type>]
         * : Type of the config value to set. Defaults to 'all'.
         * ---
         * default: all
         * options:
         *   - constant
         *   - variable
         *   - all
         * ---
         *
         * ## EXAMPLES
         *
         *     # Check whether the DB_PASSWORD constant exists in the wp-config.php file.
         *     $ wp config has DB_PASSWORD
         *
         * @when before_wp_load
         */
        public function has($args, $assoc_args)
        {
        }
        /**
         * Refreshes the salts defined in the wp-config.php file.
         *
         * ## OPTIONS
         *
         * ## EXAMPLES
         *
         *     # Get new salts for your wp-config.php file
         *     $ wp config shuffle-salts
         *     Success: Shuffled the salt keys.
         *
         * @subcommand shuffle-salts
         * @when before_wp_load
         */
        public function shuffle_salts($args, $assoc_args)
        {
        }
        /**
         * Filters wp-config.php file configurations.
         *
         * @param array $list
         * @param array $previous_list
         * @param string $type
         * @param array $exclude_list
         * @return array
         */
        private static function get_wp_config_diff($list, $previous_list, $type, $exclude_list = array())
        {
        }
        private static function read_($url)
        {
        }
        /**
         * Prints the value of a constant or variable defined in the wp-config.php file.
         *
         * If the constant or variable is not defined in the wp-config.php file then an error will be returned.
         *
         * @param string $name
         * @param string $type
         * @param array $values
         *
         * @return string The value of the requested constant or variable as defined in the wp-config.php file; if the
         *                requested constant or variable is not defined then the function will print an error and exit.
         */
        private function return_value($name, $type, $values)
        {
        }
        /**
         * Generates a unique key/salt for the wp-config.php file.
         *
         * @throws Exception
         *
         * @return string
         */
        private static function unique_key()
        {
        }
        /**
         * Filters the values based on a provider filter key.
         *
         * @param array $values
         * @param array $filters
         * @param bool $strict
         *
         * @return array
         */
        private function filter_values($values, $filters, $strict)
        {
        }
        /**
         * Gets the path to the wp-config.php file or gives a helpful error if none found.
         *
         * @return string Path to wp-config.php file.
         */
        private function get_config_path()
        {
        }
        /**
         * Parses the separator argument, to allow for special character handling.
         *
         * Does the following transformations:
         * - '\n' => "\n" (newline)
         * - '\r' => "\r" (carriage return)
         * - '\t' => "\t" (tab)
         *
         * @param string $separator Separator string to parse.
         *
         * @return mixed Parsed separator string.
         */
        private function parse_separator($separator)
        {
        }
    }
    /**
     * Downloads, installs, updates, and manages a WordPress installation.
     *
     * ## EXAMPLES
     *
     *     # Download WordPress core
     *     $ wp core download --locale=nl_NL
     *     Downloading WordPress 4.5.2 (nl_NL)...
     *     md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
     *     Success: WordPress downloaded.
     *
     *     # Install WordPress
     *     $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com
     *     Success: WordPress installed successfully.
     *
     *     # Display the WordPress version
     *     $ wp core version
     *     4.5.2
     *
     * @package wp-cli
     */
    class Core_Command extends \WP_CLI_Command
    {
        /**
         * Checks for WordPress updates via Version Check API.
         *
         * Lists the most recent versions when there are updates available,
         * or success message when up to date.
         *
         * ## OPTIONS
         *
         * [--minor]
         * : Compare only the first two parts of the version number.
         *
         * [--major]
         * : Compare only the first part of the version number.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each update.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields. Defaults to version,update_type,package_url.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - count
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp core check-update
         *     +---------+-------------+-------------------------------------------------------------+
         *     | version | update_type | package_url                                                 |
         *     +---------+-------------+-------------------------------------------------------------+
         *     | 4.5.2   | major       | https://downloads.wordpress.org/release/wordpress-4.5.2.zip |
         *     +---------+-------------+-------------------------------------------------------------+
         *
         * @subcommand check-update
         */
        public function check_update($_, $assoc_args)
        {
        }
        /**
         * Downloads core WordPress files.
         *
         * Downloads and extracts WordPress core files to the specified path. Uses
         * current directory when no path is specified. Downloaded build is verified
         * to have the correct md5 and then cached to the local filesytem.
         * Subsequent uses of command will use the local cache if it still exists.
         *
         * ## OPTIONS
         *
         * [<download-url>]
         * : Download directly from a provided URL instead of fetching the URL from the wordpress.org servers.
         *
         * [--path=<path>]
         * : Specify the path in which to install WordPress. Defaults to current
         * directory.
         *
         * [--locale=<locale>]
         * : Select which language you want to download.
         *
         * [--version=<version>]
         * : Select which version you want to download. Accepts a version number, 'latest' or 'nightly'.
         *
         * [--skip-content]
         * : Download WP without the default themes and plugins.
         *
         * [--force]
         * : Overwrites existing files, if present.
         *
         * ## EXAMPLES
         *
         *     $ wp core download --locale=nl_NL
         *     Downloading WordPress 4.5.2 (nl_NL)...
         *     md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
         *     Success: WordPress downloaded.
         *
         * @when before_wp_load
         */
        public function download($args, $assoc_args)
        {
        }
        private static function read($url)
        {
        }
        private function get_download_offer($locale)
        {
        }
        /**
         * Checks if WordPress is installed.
         *
         * Determines whether WordPress is installed by checking if the standard
         * database tables are installed. Doesn't produce output; uses exit codes
         * to communicate whether WordPress is installed.
         *
         * [--network]
         * : Check if this is a multisite installation.
         *
         * ## EXAMPLES
         *
         *     # Check whether WordPress is installed; exit status 0 if installed, otherwise 1
         *     $ wp core is-installed
         *     $ echo $?
         *     1
         *
         *     # Bash script for checking whether WordPress is installed or not
         *     if ! wp core is-installed; then
         *         wp core install
         *     fi
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args)
        {
        }
        /**
         * Runs the standard WordPress installation process.
         *
         * Creates the WordPress tables in the database using the URL, title, and
         * default admin user details provided. Performs the famous 5 minute install
         * in seconds or less.
         *
         * Note: if you've installed WordPress in a subdirectory, then you'll need
         * to `wp option update siteurl` after `wp core install`. For instance, if
         * WordPress is installed in the `/wp` directory and your domain is example.com,
         * then you'll need to run `wp option update siteurl http://example.com/wp` for
         * your WordPress installation to function properly.
         *
         * Note: When using custom user tables (e.g. `CUSTOM_USER_TABLE`), the admin
         * email and password are ignored if the user_login already exists. If the
         * user_login doesn't exist, a new user will be created.
         *
         * ## OPTIONS
         *
         * --url=<url>
         * : The address of the new site.
         *
         * --title=<site-title>
         * : The title of the new site.
         *
         * --admin_user=<username>
         * : The name of the admin user.
         *
         * [--admin_password=<password>]
         * : The password for the admin user. Defaults to randomly generated string.
         *
         * --admin_email=<email>
         * : The email address for the admin user.
         *
         * [--skip-email]
         * : Don't send an email notification to the new admin user.
         *
         * ## EXAMPLES
         *
         *     # Install WordPress in 5 seconds
         *     $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com
         *     Success: WordPress installed successfully.
         *
         *     # Install WordPress without disclosing admin_password to bash history
         *     $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_email=info@example.com --prompt=admin_password < admin_password.txt
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Transforms an existing single-site installation into a multisite installation.
         *
         * Creates the multisite database tables, and adds the multisite constants
         * to wp-config.php.
         *
         * For those using WordPress with Apache, remember to update the `.htaccess`
         * file with the appropriate multisite rewrite rules.
         *
         * [Review the multisite documentation](https://codex.wordpress.org/Create_A_Network)
         * for more details about how multisite works.
         *
         * ## OPTIONS
         *
         * [--title=<network-title>]
         * : The title of the new network.
         *
         * [--base=<url-path>]
         * : Base path after the domain name that each site url will start with.
         * ---
         * default: /
         * ---
         *
         * [--subdomains]
         * : If passed, the network will use subdomains, instead of subdirectories. Doesn't work with 'localhost'.
         *
         * ## EXAMPLES
         *
         *     $ wp core multisite-convert
         *     Set up multisite database tables.
         *     Added multisite constants to wp-config.php.
         *     Success: Network installed. Don't forget to set up rewrite rules.
         *
         * @subcommand multisite-convert
         * @alias install-network
         */
        public function multisite_convert($args, $assoc_args)
        {
        }
        /**
         * Installs WordPress multisite from scratch.
         *
         * Creates the WordPress tables in the database using the URL, title, and
         * default admin user details provided. Then, creates the multisite tables
         * in the database and adds multisite constants to the wp-config.php.
         *
         * For those using WordPress with Apache, remember to update the `.htaccess`
         * file with the appropriate multisite rewrite rules.
         *
         * ## OPTIONS
         *
         * [--url=<url>]
         * : The address of the new site.
         *
         * [--base=<url-path>]
         * : Base path after the domain name that each site url in the network will start with.
         * ---
         * default: /
         * ---
         *
         * [--subdomains]
         * : If passed, the network will use subdomains, instead of subdirectories. Doesn't work with 'localhost'.
         *
         * --title=<site-title>
         * : The title of the new site.
         *
         * --admin_user=<username>
         * : The name of the admin user.
         * ---
         * default: admin
         * ---
         *
         * [--admin_password=<password>]
         * : The password for the admin user. Defaults to randomly generated string.
         *
         * --admin_email=<email>
         * : The email address for the admin user.
         *
         * [--skip-email]
         * : Don't send an email notification to the new admin user.
         *
         * [--skip-config]
         * : Don't add multisite constants to wp-config.php.
         *
         * ## EXAMPLES
         *
         *     $ wp core multisite-install --title="Welcome to the WordPress" \
         *     > --admin_user="admin" --admin_password="password" \
         *     > --admin_email="user@example.com"
         *     Single site database tables already present.
         *     Set up multisite database tables.
         *     Added multisite constants to wp-config.php.
         *     Success: Network installed. Don't forget to set up rewrite rules.
         *
         * @subcommand multisite-install
         */
        public function multisite_install($args, $assoc_args)
        {
        }
        private static function set_multisite_defaults($assoc_args)
        {
        }
        private function do_install($assoc_args)
        {
        }
        private function multisite_convert_($assoc_args)
        {
        }
        // copied from populate_network()
        private static function create_initial_blog($network_id, $blog_id, $domain, $path, $subdomain_install, $site_user)
        {
        }
        // copied from populate_network()
        private static function add_site_admins($site_user)
        {
        }
        private static function modify_wp_config($content)
        {
        }
        private static function get_clean_basedomain()
        {
        }
        /**
         * Displays the WordPress version.
         *
         * ## OPTIONS
         *
         * [--extra]
         * : Show extended version information.
         *
         * ## EXAMPLES
         *
         *     # Display the WordPress version
         *     $ wp core version
         *     4.5.2
         *
         *     # Display WordPress version along with other information
         *     $ wp core version --extra
         *     WordPress version: 4.5.2
         *     Database revision: 36686
         *     TinyMCE version:   4.310 (4310-20160418)
         *     Package language:  en_US
         *
         * @when before_wp_load
         */
        public function version($args = [], $assoc_args = [])
        {
        }
        /**
         * Gets version information from `wp-includes/version.php`.
         *
         * @return array {
         *     @type string $wp_version The WordPress version.
         *     @type int $wp_db_version The WordPress DB revision.
         *     @type string $tinymce_version The TinyMCE version.
         *     @type string $wp_local_package The TinyMCE version.
         * }
         */
        private static function get_wp_details($abspath = \ABSPATH)
        {
        }
        /**
         * Gets the template path based on installation type.
         */
        private static function get_template_path($template)
        {
        }
        /**
         * Searches for the value assigned to variable `$var_name` in PHP code `$code`.
         *
         * This is equivalent to matching the `\$VAR_NAME = ([^;]+)` regular expression and returning
         * the first match either as a `string` or as an `integer` (depending if it's surrounded by
         * quotes or not).
         *
         * @param string $var_name Variable name to search for.
         * @param string $code PHP code to search in.
         *
         * @return int|string|null
         */
        private static function find_var($var_name, $code)
        {
        }
        /**
         * Security copy of the core function with Requests - Gets the checksums for the given version of WordPress.
         *
         * @param string $version Version string to query.
         * @param string $locale  Locale to query.
         * @return string|array String message on failure. An array of checksums on success.
         */
        private static function get_core_checksums($version, $locale)
        {
        }
        /**
         * Updates WordPress to a newer version.
         *
         * Defaults to updating WordPress to the latest version.
         *
         * If you see "Error: Another update is currently in progress.", you may
         * need to run `wp option delete core_updater.lock` after verifying another
         * update isn't actually running.
         *
         * ## OPTIONS
         *
         * [<zip>]
         * : Path to zip file to use, instead of downloading from wordpress.org.
         *
         * [--minor]
         * : Only perform updates for minor releases (e.g. update from WP 4.3 to 4.3.3 instead of 4.4.2).
         *
         * [--version=<version>]
         * : Update to a specific version, instead of to the latest version. Alternatively accepts 'nightly'.
         *
         * [--force]
         * : Update even when installed WP version is greater than the requested version.
         *
         * [--locale=<locale>]
         * : Select which language you want to download.
         *
         * ## EXAMPLES
         *
         *     # Update WordPress
         *     $ wp core update
         *     Updating to version 4.5.2 (en_US)...
         *     Downloading update from https://downloads.wordpress.org/release/wordpress-4.5.2-no-content.zip...
         *     Unpacking the update...
         *     Cleaning up files...
         *     No files found that need cleaning up
         *     Success: WordPress updated successfully.
         *
         *     # Update WordPress to latest version of 3.8 release
         *     $ wp core update --version=3.8 ../latest.zip
         *     Updating to version 3.8 ()...
         *     Unpacking the update...
         *     Cleaning up files...
         *     File removed: wp-admin/js/tags-box.js
         *     ...
         *     File removed: wp-admin/js/updates.min.
         *     377 files cleaned up
         *     Success: WordPress updated successfully.
         *
         *     # Update WordPress to 3.1 forcefully
         *     $ wp core update --version=3.1 --force
         *     Updating to version 3.1 (en_US)...
         *     Downloading update from https://wordpress.org/wordpress-3.1.zip...
         *     Unpacking the update...
         *     Warning: Checksums not available for WordPress 3.1/en_US. Please cleanup files manually.
         *     Success: WordPress updated successfully.
         *
         * @alias upgrade
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Runs the WordPress database update procedure.
         *
         * [--network]
         * : Update databases for all sites on a network
         *
         * [--dry-run]
         * : Compare database versions without performing the update.
         *
         * ## EXAMPLES
         *
         *     # Update the WordPress database
         *     $ wp core update-db
         *     Success: WordPress database upgraded successfully from db version 36686 to 35700.
         *
         *     # Update databases for all sites on a network
         *     $ wp core update-db --network
         *     WordPress database upgraded successfully from db version 35700 to 29630 on example.com/
         *     Success: WordPress database upgraded on 123/123 sites
         *
         * @subcommand update-db
         */
        public function update_db($args, $assoc_args)
        {
        }
        /**
         * Gets download url based on version, locale and desired file type.
         *
         * @param $version
         * @param string $locale
         * @param string $file_type
         * @return string
         */
        private function get_download_url($version, $locale = 'en_US', $file_type = 'zip')
        {
        }
        /**
         * Returns update information.
         */
        private function get_updates($assoc_args)
        {
        }
        private function cleanup_extra_files($version_from, $version_to, $locale)
        {
        }
        private static function strip_content_dir($zip_file)
        {
        }
    }
}
namespace WP_CLI\Core {
    /**
     * A Core Upgrader class that caches the download, and uses cached if available.
     *
     * @package wp-cli
     */
    class CoreUpgrader extends \Core_Upgrader
    {
        /**
         * Caches the download, and uses cached if available.
         *
         * @access public
         *
         * @param string $package          The URI of the package. If this is the full path to an
         *                                 existing local file, it will be returned untouched.
         * @param bool   $check_signatures Whether to validate file signatures. Default true.
         * @return string|WP_Error The full path to the downloaded package file, or a WP_Error object.
         */
        public function download_package($package, $check_signatures = true)
        {
        }
        /**
         * Upgrade WordPress core.
         *
         * @access public
         *
         * @global WP_Filesystem_Base $wp_filesystem Subclass
         * @global callable           $_wp_filesystem_direct_method
         *
         * @param object $current Response object for whether WordPress is current.
         * @param array  $args {
         *        Optional. Arguments for upgrading WordPress core. Default empty array.
         *
         *        @type bool $pre_check_md5    Whether to check the file checksums before
         *                                     attempting the upgrade. Default true.
         *        @type bool $attempt_rollback Whether to attempt to rollback the chances if
         *                                     there is a problem. Default false.
         *        @type bool $do_rollback      Whether to perform this "upgrade" as a rollback.
         *                                     Default false.
         * }
         * @return null|false|WP_Error False or WP_Error on failure, null on success.
         */
        public function upgrade($current, $args = [])
        {
        }
        /**
         * Error handler to ignore failures on accessing SSL "https://api.wordpress.org/core/checksums/1.0/" in `get_core_checksums()` which seem to occur intermittently.
         */
        public static function error_handler($errno, $errstr, $errfile, $errline, $errcontext = null)
        {
        }
    }
    /**
     * A Core Upgrader class that leaves packages intact by default.
     *
     * @package wp-cli
     */
    class NonDestructiveCoreUpgrader extends \WP_CLI\Core\CoreUpgrader
    {
        // phpcs:ignore Generic.CodeAnalysis.UselessOverridingMethod.Found -- Provide default value.
        public function unpack_package($package, $delete_package = false)
        {
        }
    }
}
namespace {
    /**
     * Tests, runs, and deletes WP-Cron events; manages WP-Cron schedules.
     *
     * ## EXAMPLES
     *
     *     # Test WP Cron spawning system
     *     $ wp cron test
     *     Success: WP-Cron spawning is working as expected.
     */
    class Cron_Command extends \WP_CLI_Command
    {
        /**
         * Tests the WP Cron spawning system and reports back its status.
         *
         * This command tests the spawning system by performing the following steps:
         *
         * * Checks to see if the `DISABLE_WP_CRON` constant is set; errors if true
         * because WP-Cron is disabled.
         * * Checks to see if the `ALTERNATE_WP_CRON` constant is set; warns if true.
         * * Attempts to spawn WP-Cron over HTTP; warns if non 200 response code is
         * returned.
         *
         * ## EXAMPLES
         *
         *     # Cron test runs successfully.
         *     $ wp cron test
         *     Success: WP-Cron spawning is working as expected.
         */
        public function test()
        {
        }
        /**
         * Spawns a request to `wp-cron.php` and return the response.
         *
         * This function is designed to mimic the functionality in `spawn_cron()`
         * with the addition of returning the result of the `wp_remote_post()`
         * request.
         *
         * @return WP_Error|array The response or WP_Error on failure.
         */
        protected static function get_cron_spawn()
        {
        }
    }
    /**
     * Schedules, runs, and deletes WP-Cron events.
     *
     * ## EXAMPLES
     *
     *     # Schedule a new cron event
     *     $ wp cron event schedule cron_test
     *     Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:19:16 GMT.
     *
     *     # Run all cron events due right now
     *     $ wp cron event run --due-now
     *     Success: Executed a total of 2 cron events.
     *
     *     # Delete all scheduled cron events for the given hook
     *     $ wp cron event delete cron_test
     *     Success: Deleted 2 instances of the cron event 'cron_test'.
     *
     *     # List scheduled cron events in JSON
     *     $ wp cron event list --fields=hook,next_run --format=json
     *     [{"hook":"wp_version_check","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_plugins","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_themes","next_run":"2016-05-31 10:15:14"}]
     *
     * @package wp-cli
     */
    class Cron_Event_Command extends \WP_CLI_Command
    {
        private $fields = array('hook', 'next_run_gmt', 'next_run_relative', 'recurrence');
        private static $time_format = 'Y-m-d H:i:s';
        /**
         * Lists scheduled cron events.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--<field>=<value>]
         * : Filter by one or more fields.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each event.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each cron event:
         * * hook
         * * next_run_gmt
         * * next_run_relative
         * * recurrence
         *
         * These fields are optionally available:
         * * time
         * * sig
         * * args
         * * schedule
         * * interval
         * * next_run
         *
         * ## EXAMPLES
         *
         *     # List scheduled cron events
         *     $ wp cron event list
         *     +-------------------+---------------------+---------------------+------------+
         *     | hook              | next_run_gmt        | next_run_relative   | recurrence |
         *     +-------------------+---------------------+---------------------+------------+
         *     | wp_version_check  | 2016-05-31 22:15:13 | 11 hours 57 minutes | 12 hours   |
         *     | wp_update_plugins | 2016-05-31 22:15:13 | 11 hours 57 minutes | 12 hours   |
         *     | wp_update_themes  | 2016-05-31 22:15:14 | 11 hours 57 minutes | 12 hours   |
         *     +-------------------+---------------------+---------------------+------------+
         *
         *     # List scheduled cron events in JSON
         *     $ wp cron event list --fields=hook,next_run --format=json
         *     [{"hook":"wp_version_check","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_plugins","next_run":"2016-05-31 10:15:13"},{"hook":"wp_update_themes","next_run":"2016-05-31 10:15:14"}]
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Schedules a new cron event.
         *
         * ## OPTIONS
         *
         * <hook>
         * : The hook name.
         *
         * [<next-run>]
         * : A Unix timestamp or an English textual datetime description compatible with `strtotime()`. Defaults to now.
         *
         * [<recurrence>]
         * : How often the event should recur. See `wp cron schedule list` for available schedule names. Defaults to no recurrence.
         *
         * [--<field>=<value>]
         * : Arguments to pass to the hook for the event. <field> should be a numeric key, not a string.
         *
         * ## EXAMPLES
         *
         *     # Schedule a new cron event
         *     $ wp cron event schedule cron_test
         *     Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:19:16 GMT.
         *
         *     # Schedule new cron event with hourly recurrence
         *     $ wp cron event schedule cron_test now hourly
         *     Success: Scheduled event with hook 'cron_test' for 2016-05-31 10:20:32 GMT.
         *
         *     # Schedule new cron event and pass arguments
         *     $ wp cron event schedule cron_test '+1 hour' --0=first-argument --1=second-argument
         *     Success: Scheduled event with hook 'cron_test' for 2016-05-31 11:21:35 GMT.
         */
        public function schedule($args, $assoc_args)
        {
        }
        /**
         * Runs the next scheduled cron event for the given hook.
         *
         * ## OPTIONS
         *
         * [<hook>...]
         * : One or more hooks to run.
         *
         * [--due-now]
         * : Run all hooks due right now.
         *
         * [--all]
         * : Run all hooks.
         *
         * ## EXAMPLES
         *
         *     # Run all cron events due right now
         *     $ wp cron event run --due-now
         *     Success: Executed a total of 2 cron events.
         */
        public function run($args, $assoc_args)
        {
        }
        /**
         * Unschedules all cron events for a given hook.
         *
         * ## OPTIONS
         *
         * <hook>
         * : Name of the hook for which all events should be unscheduled.
         *
         * ## EXAMPLES
         *
         *     # Unschedule a cron event on given hook.
         *     $ wp cron event unschedule cron_test
         *     Success: Unscheduled 2 events with hook 'cron_test'.
         */
        public function unschedule($args, $assoc_args)
        {
        }
        /**
         * Executes an event immediately.
         *
         * @param stdClass $event The event
         * @return bool Whether the event was successfully executed or not.
         */
        protected static function run_event(\stdClass $event)
        {
        }
        /**
         * Deletes all scheduled cron events for the given hook.
         *
         * ## OPTIONS
         *
         * <hook>
         * : The hook name.
         *
         * ## EXAMPLES
         *
         *     # Delete all scheduled cron events for the given hook
         *     $ wp cron event delete cron_test
         *     Success: Deleted 2 instances of the cron event 'cron_test'.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Deletes a cron event.
         *
         * @param stdClass $event The event
         * @return bool Whether the event was successfully deleted or not.
         */
        protected static function delete_event(\stdClass $event)
        {
        }
        /**
         * Callback function to format a cron event.
         *
         * @param stdClass $event The event.
         * @return stdClass The formatted event object.
         */
        protected static function format_event(\stdClass $event)
        {
        }
        /**
         * Fetches an array of scheduled cron events.
         *
         * @return array|WP_Error An array of event objects, or a WP_Error object if there are no events scheduled.
         */
        protected static function get_cron_events()
        {
        }
        /**
         * Converts a time interval into human-readable format.
         *
         * Similar to WordPress' built-in `human_time_diff()` but returns two time period chunks instead of just one.
         *
         * @param int $since An interval of time in seconds
         * @return string The interval in human readable format
         */
        private static function interval($since)
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Gets WP-Cron schedules.
     *
     * ## EXAMPLES
     *
     *     # List available cron schedules
     *     $ wp cron schedule list
     *     +------------+-------------+----------+
     *     | name       | display     | interval |
     *     +------------+-------------+----------+
     *     | hourly     | Once Hourly | 3600     |
     *     | twicedaily | Twice Daily | 43200    |
     *     | daily      | Once Daily  | 86400    |
     *     +------------+-------------+----------+
     */
    class Cron_Schedule_Command extends \WP_CLI_Command
    {
        private $fields = array('name', 'display', 'interval');
        /**
         * List available cron schedules.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each schedule.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each cron schedule:
         *
         * * name
         * * display
         * * interval
         *
         * There are no additional fields.
         *
         * ## EXAMPLES
         *
         *     # List available cron schedules
         *     $ wp cron schedule list
         *     +------------+-------------+----------+
         *     | name       | display     | interval |
         *     +------------+-------------+----------+
         *     | hourly     | Once Hourly | 3600     |
         *     | twicedaily | Twice Daily | 43200    |
         *     | daily      | Once Daily  | 86400    |
         *     +------------+-------------+----------+
         *
         *     # List id of available cron schedule
         *     $ wp cron schedule list --fields=name --format=ids
         *     hourly twicedaily daily
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Callback function to format a cron schedule.
         *
         * @param array $schedule The schedule.
         * @param string $name The schedule name.
         * @return array The formatted schedule.
         */
        protected static function format_schedule(array $schedule, $name)
        {
        }
        /**
         * Return a list of the cron schedules sorted according to interval.
         *
         * @return array The array of cron schedules. Each schedule is itself an array.
         */
        protected static function get_schedules()
        {
        }
        /**
         * Callback function to sort the cron schedule array by interval.
         *
         */
        protected static function sort(array $a, array $b)
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Performs basic database operations using credentials stored in wp-config.php.
     *
     * ## EXAMPLES
     *
     *     # Create a new database.
     *     $ wp db create
     *     Success: Database created.
     *
     *     # Drop an existing database.
     *     $ wp db drop --yes
     *     Success: Database dropped.
     *
     *     # Reset the current database.
     *     $ wp db reset --yes
     *     Success: Database reset.
     *
     *     # Execute a SQL query stored in a file.
     *     $ wp db query < debug.sql
     *
     * @when after_wp_config_load
     */
    class DB_Command extends \WP_CLI_Command
    {
        /**
         * A list of incompatible SQL modes.
         *
         * Copied over from WordPress Core code.
         * @see https://github.com/WordPress/wordpress-develop/blob/5.4.0/src/wp-includes/wp-db.php#L559-L572
         *
         * @var string[] Array of SQL mode names that are incompatible with WordPress.
         */
        protected $sql_incompatible_modes = ['NO_ZERO_DATE', 'ONLY_FULL_GROUP_BY', 'STRICT_TRANS_TABLES', 'STRICT_ALL_TABLES', 'TRADITIONAL', 'ANSI'];
        /**
         * Creates a new database.
         *
         * Runs `CREATE_DATABASE` SQL statement using `DB_HOST`, `DB_NAME`,
         * `DB_USER` and `DB_PASSWORD` database credentials specified in
         * wp-config.php.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * ## EXAMPLES
         *
         *     $ wp db create
         *     Success: Database created.
         */
        public function create($_, $assoc_args)
        {
        }
        /**
         * Deletes the existing database.
         *
         * Runs `DROP_DATABASE` SQL statement using `DB_HOST`, `DB_NAME`,
         * `DB_USER` and `DB_PASSWORD` database credentials specified in
         * wp-config.php.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--yes]
         * : Answer yes to the confirmation message.
         *
         * ## EXAMPLES
         *
         *     $ wp db drop --yes
         *     Success: Database dropped.
         */
        public function drop($_, $assoc_args)
        {
        }
        /**
         * Removes all tables from the database.
         *
         * Runs `DROP_DATABASE` and `CREATE_DATABASE` SQL statements using
         * `DB_HOST`, `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
         * specified in wp-config.php.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--yes]
         * : Answer yes to the confirmation message.
         *
         * ## EXAMPLES
         *
         *     $ wp db reset --yes
         *     Success: Database reset.
         */
        public function reset($_, $assoc_args)
        {
        }
        /**
         * Removes all tables with `$table_prefix` from the database.
         *
         * Runs `DROP_TABLE` for each table that has a `$table_prefix` as specified
         * in wp-config.php.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--yes]
         * : Answer yes to the confirmation message.
         *
         * ## EXAMPLES
         *
         *     # Delete all tables that match the current site prefix.
         *     $ wp db clean --yes
         *     Success: Tables dropped.
         *
         * @when after_wp_load
         */
        public function clean($_, $assoc_args)
        {
        }
        /**
         * Checks the current status of the database.
         *
         * Runs `mysqlcheck` utility with `--check` using `DB_HOST`,
         * `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
         * specified in wp-config.php.
         *
         * [See docs](http://dev.mysql.com/doc/refman/5.7/en/check-table.html)
         * for more details on the `CHECK TABLE` statement.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysqlcheck. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysqlcheck. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysqlcheck. [Refer to mysqlcheck docs](https://dev.mysql.com/doc/en/mysqlcheck.html).
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     $ wp db check
         *     Success: Database checked.
         */
        public function check($_, $assoc_args)
        {
        }
        /**
         * Optimizes the database.
         *
         * Runs `mysqlcheck` utility with `--optimize=true` using `DB_HOST`,
         * `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
         * specified in wp-config.php.
         *
         * [See docs](http://dev.mysql.com/doc/refman/5.7/en/optimize-table.html)
         * for more details on the `OPTIMIZE TABLE` statement.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysqlcheck. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysqlcheck. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysqlcheck. [Refer to mysqlcheck docs](https://dev.mysql.com/doc/en/mysqlcheck.html).
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     $ wp db optimize
         *     Success: Database optimized.
         */
        public function optimize($_, $assoc_args)
        {
        }
        /**
         * Repairs the database.
         *
         * Runs `mysqlcheck` utility with `--repair=true` using `DB_HOST`,
         * `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
         * specified in wp-config.php.
         *
         * [See docs](http://dev.mysql.com/doc/refman/5.7/en/repair-table.html) for
         * more details on the `REPAIR TABLE` statement.
         *
         * ## OPTIONS
         *
         * [--dbuser=<value>]
         * : Username to pass to mysqlcheck. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysqlcheck. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysqlcheck. [Refer to mysqlcheck docs](https://dev.mysql.com/doc/en/mysqlcheck.html).
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     $ wp db repair
         *     Success: Database repaired.
         */
        public function repair($_, $assoc_args)
        {
        }
        /**
         * Opens a MySQL console using credentials from wp-config.php
         *
         * ## OPTIONS
         *
         * [--database=<database>]
         * : Use a specific database. Defaults to DB_NAME.
         *
         * [--default-character-set=<character-set>]
         * : Use a specific character set. Defaults to DB_CHARSET when defined.
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysql. [Refer to mysql docs](https://dev.mysql.com/doc/en/mysql-command-options.html).
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     # Open MySQL console
         *     $ wp db cli
         *     mysql>
         *
         * @alias connect
         */
        public function cli($_, $assoc_args)
        {
        }
        /**
         * Executes a SQL query against the database.
         *
         * Executes an arbitrary SQL query using `DB_HOST`, `DB_NAME`, `DB_USER`
         *  and `DB_PASSWORD` database credentials specified in wp-config.php.
         *
         * ## OPTIONS
         *
         * [<sql>]
         * : A SQL query. If not passed, will try to read from STDIN.
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysql. [Refer to mysql docs](https://dev.mysql.com/doc/en/mysql-command-options.html).
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     # Execute a query stored in a file
         *     $ wp db query < debug.sql
         *
         *     # Check all tables in the database
         *     $ wp db query "CHECK TABLE $(wp db tables | paste -s -d, -);"
         *     +---------------------------------------+-------+----------+----------+
         *     | Table                                 | Op    | Msg_type | Msg_text |
         *     +---------------------------------------+-------+----------+----------+
         *     | wordpress_dbase.wp_users              | check | status   | OK       |
         *     | wordpress_dbase.wp_usermeta           | check | status   | OK       |
         *     | wordpress_dbase.wp_posts              | check | status   | OK       |
         *     | wordpress_dbase.wp_comments           | check | status   | OK       |
         *     | wordpress_dbase.wp_links              | check | status   | OK       |
         *     | wordpress_dbase.wp_options            | check | status   | OK       |
         *     | wordpress_dbase.wp_postmeta           | check | status   | OK       |
         *     | wordpress_dbase.wp_terms              | check | status   | OK       |
         *     | wordpress_dbase.wp_term_taxonomy      | check | status   | OK       |
         *     | wordpress_dbase.wp_term_relationships | check | status   | OK       |
         *     | wordpress_dbase.wp_termmeta           | check | status   | OK       |
         *     | wordpress_dbase.wp_commentmeta        | check | status   | OK       |
         *     +---------------------------------------+-------+----------+----------+
         *
         *     # Pass extra arguments through to MySQL
         *     $ wp db query 'SELECT * FROM wp_options WHERE option_name="home"' --skip-column-names
         *     +---+------+------------------------------+-----+
         *     | 2 | home | http://wordpress-develop.dev | yes |
         *     +---+------+------------------------------+-----+
         */
        public function query($args, $assoc_args)
        {
        }
        /**
         * Exports the database to a file or to STDOUT.
         *
         * Runs `mysqldump` utility using `DB_HOST`, `DB_NAME`, `DB_USER` and
         * `DB_PASSWORD` database credentials specified in wp-config.php.
         *
         * ## OPTIONS
         *
         * [<file>]
         * : The name of the SQL file to export. If '-', then outputs to STDOUT. If
         * omitted, it will be '{dbname}-{Y-m-d}-{random-hash}.sql'.
         *
         * [--dbuser=<value>]
         * : Username to pass to mysqldump. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysqldump. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysqldump. [Refer to mysqldump docs](https://dev.mysql.com/doc/en/mysqldump.html#mysqldump-option-summary).
         *
         * [--tables=<tables>]
         * : The comma separated list of specific tables to export. Excluding this parameter will export all tables in the database.
         *
         * [--exclude_tables=<tables>]
         * : The comma separated list of specific tables that should be skipped from exporting. Excluding this parameter will export all tables in the database.
         *
         * [--porcelain]
         * : Output filename for the exported database.
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     # Export database with drop query included
         *     $ wp db export --add-drop-table
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export certain tables
         *     $ wp db export --tables=wp_options,wp_users
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export all tables matching a wildcard
         *     $ wp db export --tables=$(wp db tables 'wp_user*' --format=csv)
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export all tables matching prefix
         *     $ wp db export --tables=$(wp db tables --all-tables-with-prefix --format=csv)
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export certain posts without create table statements
         *     $ wp db export --no-create-info=true --tables=wp_posts --where="ID in (100,101,102)"
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export relating meta for certain posts without create table statements
         *     $ wp db export --no-create-info=true --tables=wp_postmeta --where="post_id in (100,101,102)"
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Skip certain tables from the exported database
         *     $ wp db export --exclude_tables=wp_options,wp_users
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Skip all tables matching a wildcard from the exported database
         *     $ wp db export --exclude_tables=$(wp db tables 'wp_user*' --format=csv)
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Skip all tables matching prefix from the exported database
         *     $ wp db export --exclude_tables=$(wp db tables --all-tables-with-prefix --format=csv)
         *     Success: Exported to 'wordpress_dbase-db72bb5.sql'.
         *
         *     # Export database to STDOUT.
         *     $ wp db export -
         *     -- MySQL dump 10.13  Distrib 5.7.19, for osx10.12 (x86_64)
         *     --
         *     -- Host: localhost    Database: wpdev
         *     -- ------------------------------------------------------
         *     -- Server version    5.7.19
         *     ...
         *
         * @alias dump
         */
        public function export($args, $assoc_args)
        {
        }
        /**
         * Imports a database from a file or from STDIN.
         *
         * Runs SQL queries using `DB_HOST`, `DB_NAME`, `DB_USER` and
         * `DB_PASSWORD` database credentials specified in wp-config.php. This
         * does not create database by itself and only performs whatever tasks are
         * defined in the SQL.
         *
         * ## OPTIONS
         *
         * [<file>]
         * : The name of the SQL file to import. If '-', then reads from STDIN. If omitted, it will look for '{dbname}.sql'.
         *
         * [--dbuser=<value>]
         * : Username to pass to mysql. Defaults to DB_USER.
         *
         * [--dbpass=<value>]
         * : Password to pass to mysql. Defaults to DB_PASSWORD.
         *
         * [--<field>=<value>]
         * : Extra arguments to pass to mysql. [Refer to mysql binary docs](https://dev.mysql.com/doc/refman/8.0/en/mysql-command-options.html).
         *
         * [--skip-optimization]
         * : When using an SQL file, do not include speed optimization such as disabling auto-commit and key checks.
         *
         * [--defaults]
         * : Loads the environment's MySQL option files. Default behavior is to skip loading them to avoid failures due to misconfiguration.
         *
         * ## EXAMPLES
         *
         *     # Import MySQL from a file.
         *     $ wp db import wordpress_dbase.sql
         *     Success: Imported from 'wordpress_dbase.sql'.
         */
        public function import($args, $assoc_args)
        {
        }
        /**
         * Lists the database tables.
         *
         * Defaults to all tables registered to the $wpdb database handler.
         *
         * ## OPTIONS
         *
         * [<table>...]
         * : List tables based on wildcard search, e.g. 'wp_*_options' or 'wp_post?'.
         *
         * [--scope=<scope>]
         * : Can be all, global, ms_global, blog, or old tables. Defaults to all.
         *
         * [--network]
         * : List all the tables in a multisite install.
         *
         * [--all-tables-with-prefix]
         * : List all tables that match the table prefix even if not registered on $wpdb. Overrides --network.
         *
         * [--all-tables]
         * : List all tables in the database, regardless of the prefix, and even if not registered on $wpdb. Overrides --all-tables-with-prefix.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: list
         * options:
         *   - list
         *   - csv
         * ---
         *
         * ## EXAMPLES
         *
         *     # List tables for a single site, without shared tables like 'wp_users'
         *     $ wp db tables --scope=blog --url=sub.example.com
         *     wp_3_posts
         *     wp_3_comments
         *     wp_3_options
         *     wp_3_postmeta
         *     wp_3_terms
         *     wp_3_term_taxonomy
         *     wp_3_term_relationships
         *     wp_3_termmeta
         *     wp_3_commentmeta
         *
         *     # Export only tables for a single site
         *     $ wp db export --tables=$(wp db tables --url=sub.example.com --format=csv)
         *     Success: Exported to wordpress_dbase.sql
         *
         * @when after_wp_load
         */
        public function tables($args, $assoc_args)
        {
        }
        /**
         * Displays the database name and size.
         *
         * Display the database name and size for `DB_NAME` specified in wp-config.php.
         * The size defaults to a human-readable number.
         *
         * Available size formats include:
         * * b (bytes)
         * * kb (kilobytes)
         * * mb (megabytes)
         * * gb (gigabytes)
         * * tb (terabytes)
         * * B   (ISO Byte setting, with no conversion)
         * * KB  (ISO Kilobyte setting, with 1 KB  = 1,000 B)
         * * KiB (ISO Kibibyte setting, with 1 KiB = 1,024 B)
         * * MB  (ISO Megabyte setting, with 1 MB  = 1,000 KB)
         * * MiB (ISO Mebibyte setting, with 1 MiB = 1,024 KiB)
         * * GB  (ISO Gigabyte setting, with 1 GB  = 1,000 MB)
         * * GiB (ISO Gibibyte setting, with 1 GiB = 1,024 MiB)
         * * TB  (ISO Terabyte setting, with 1 TB  = 1,000 GB)
         * * TiB (ISO Tebibyte setting, with 1 TiB = 1,024 GiB)
         *
         * ## OPTIONS
         *
         * [--size_format=<format>]
         * : Display the database size only, as a bare number.
         * ---
         * options:
         *   - b
         *   - kb
         *   - mb
         *   - gb
         *   - tb
         *   - B
         *   - KB
         *   - KiB
         *   - MB
         *   - MiB
         *   - GB
         *   - GiB
         *   - TB
         *   - TiB
         * ---
         *
         * [--tables]
         * : Display each table name and size instead of the database size.
         *
         * [--human-readable]
         * : Display database sizes in human readable formats.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * [--scope=<scope>]
         * : Can be all, global, ms_global, blog, or old tables. Defaults to all.
         *
         * [--network]
         * : List all the tables in a multisite install.
         *
         * [--all-tables-with-prefix]
         * : List all tables that match the table prefix even if not registered on $wpdb. Overrides --network.
         *
         * [--all-tables]
         * : List all tables in the database, regardless of the prefix, and even if not registered on $wpdb. Overrides --all-tables-with-prefix.
         *
         * ## EXAMPLES
         *
         *     $ wp db size
         *     +-------------------+------+
         *     | Name              | Size |
         *     +-------------------+------+
         *     | wordpress_default | 6 MB |
         *     +-------------------+------+
         *
         *     $ wp db size --tables
         *     +-----------------------+-------+
         *     | Name                  | Size  |
         *     +-----------------------+-------+
         *     | wp_users              | 64 KB |
         *     | wp_usermeta           | 48 KB |
         *     | wp_posts              | 80 KB |
         *     | wp_comments           | 96 KB |
         *     | wp_links              | 32 KB |
         *     | wp_options            | 32 KB |
         *     | wp_postmeta           | 48 KB |
         *     | wp_terms              | 48 KB |
         *     | wp_term_taxonomy      | 48 KB |
         *     | wp_term_relationships | 32 KB |
         *     | wp_termmeta           | 48 KB |
         *     | wp_commentmeta        | 48 KB |
         *     +-----------------------+-------+
         *
         *     $ wp db size --size_format=b
         *     5865472
         *
         *     $ wp db size --size_format=kb
         *     5728
         *
         *     $ wp db size --size_format=mb
         *     6
         *
         * @when after_wp_load
         */
        public function size($args, $assoc_args)
        {
        }
        /**
         * Displays the database table prefix.
         *
         * Display the database table prefix, as defined by the database handler's interpretation of the current site.
         *
         * ## EXAMPLES
         *
         *     $ wp db prefix
         *     wp_
         *
         * @when after_wp_load
         */
        public function prefix()
        {
        }
        /**
         * Finds a string in the database.
         *
         * Searches through all or a selection of database tables for a given string, Outputs colorized references to the string.
         *
         * Defaults to searching through all tables registered to $wpdb. On multisite, this default is limited to the tables for the current site.
         *
         * ## OPTIONS
         *
         * <search>
         * : String to search for. The search is case-insensitive by default.
         *
         * [<tables>...]
         * : One or more tables to search through for the string.
         *
         * [--network]
         * : Search through all the tables registered to $wpdb in a multisite install.
         *
         * [--all-tables-with-prefix]
         * : Search through all tables that match the registered table prefix, even if not registered on $wpdb. On one hand, sometimes plugins use tables without registering them to $wpdb. On another hand, this could return tables you don't expect. Overrides --network.
         *
         * [--all-tables]
         * : Search through ALL tables in the database, regardless of the prefix, and even if not registered on $wpdb. Overrides --network and --all-tables-with-prefix.
         *
         * [--before_context=<num>]
         * : Number of characters to display before the match.
         * ---
         * default: 40
         * ---
         *
         * [--after_context=<num>]
         * : Number of characters to display after the match.
         * ---
         * default: 40
         * ---
         *
         * [--regex]
         * : Runs the search as a regular expression (without delimiters). The search becomes case-sensitive (i.e. no PCRE flags are added). Delimiters must be escaped if they occur in the expression.
         *
         * [--regex-flags=<regex-flags>]
         * : Pass PCRE modifiers to the regex search (e.g. 'i' for case-insensitivity).
         *
         * [--regex-delimiter=<regex-delimiter>]
         * : The delimiter to use for the regex. It must be escaped if it appears in the search string. The default value is the result of `chr(1)`.
         *
         * [--table_column_once]
         * : Output the 'table:column' line once before all matching row lines in the table column rather than before each matching row.
         *
         * [--one_line]
         * : Place the 'table:column' output on the same line as the row id and match ('table:column:id:match'). Overrides --table_column_once.
         *
         * [--matches_only]
         * : Only output the string matches (including context). No 'table:column's or row ids are outputted.
         *
         * [--stats]
         * : Output stats on the number of matches found, time taken, tables/columns/rows searched, tables skipped.
         *
         * [--table_column_color=<color_code>]
         * : Percent color code to use for the 'table:column' output. For a list of available percent color codes, see below. Default '%G' (bright green).
         *
         * [--id_color=<color_code>]
         * : Percent color code to use for the row id output. For a list of available percent color codes, see below. Default '%Y' (bright yellow).
         *
         * [--match_color=<color_code>]
         * : Percent color code to use for the match (unless both before and after context are 0, when no color code is used). For a list of available percent color codes, see below. Default '%3%k' (black on a mustard background).
         *
         * The percent color codes available are:
         *
         * | Code | Color
         * | ---- | -----
         * |  %y  | Yellow (dark) (mustard)
         * |  %g  | Green (dark)
         * |  %b  | Blue (dark)
         * |  %r  | Red (dark)
         * |  %m  | Magenta (dark)
         * |  %c  | Cyan (dark)
         * |  %w  | White (dark) (light gray)
         * |  %k  | Black
         * |  %Y  | Yellow (bright)
         * |  %G  | Green (bright)
         * |  %B  | Blue (bright)
         * |  %R  | Red (bright)
         * |  %M  | Magenta (bright)
         * |  %C  | Cyan (bright)
         * |  %W  | White
         * |  %K  | Black (bright) (dark gray)
         * |  %3  | Yellow background (dark) (mustard)
         * |  %2  | Green background (dark)
         * |  %4  | Blue background (dark)
         * |  %1  | Red background (dark)
         * |  %5  | Magenta background (dark)
         * |  %6  | Cyan background (dark)
         * |  %7  | White background (dark) (light gray)
         * |  %0  | Black background
         * |  %8  | Reverse
         * |  %U  | Underline
         * |  %F  | Blink (unlikely to work)
         *
         * They can be concatenated. For instance, the default match color of black on a mustard (dark yellow) background `%3%k` can be made black on a bright yellow background with `%Y%0%8`.
         *
         * ## EXAMPLES
         *
         *     # Search through the database for the 'wordpress-develop' string
         *     $ wp db search wordpress-develop
         *     wp_options:option_value
         *     1:http://wordpress-develop.dev
         *     wp_options:option_value
         *     1:http://example.com/foo
         *         ...
         *
         *     # Search through a multisite database on the subsite 'foo' for the 'example.com' string
         *     $ wp db search example.com --url=example.com/foo
         *     wp_2_comments:comment_author_url
         *     1:http://example.com/
         *     wp_2_options:option_value
         *         ...
         *
         *     # Search through the database for the 'https?://' regular expression, printing stats.
         *     $ wp db search 'https?://' --regex --stats
         *     wp_comments:comment_author_url
         *     1:https://wordpress.org/
         *         ...
         *     Success: Found 99146 matches in 10.752s (10.559s searching). Searched 12 tables, 53 columns, 1358907 rows. 1 table skipped: wp_term_relationships.
         *
         *     # SQL search database table 'wp_options' where 'option_name' match 'foo'
         *     wp db query 'SELECT * FROM wp_options WHERE option_name like "%foo%"' --skip-column-names
         *     +----+--------------+--------------------------------+-----+
         *     | 98 | foo_options  | a:1:{s:12:"_multiwidget";i:1;} | yes |
         *     | 99 | foo_settings | a:0:{}                         | yes |
         *     +----+--------------+--------------------------------+-----+
         *
         *     # SQL search and delete records from database table 'wp_options' where 'option_name' match 'foo'
         *     wp db query "DELETE from wp_options where option_id in ($(wp db query "SELECT GROUP_CONCAT(option_id SEPARATOR ',') from wp_options where option_name like '%foo%';" --silent --skip-column-names))"
         *
         * @when after_wp_load
         */
        public function search($args, $assoc_args)
        {
        }
        /**
         * Displays information about a given table.
         *
         * ## OPTIONS
         *
         * [<table>]
         * : Name of the database table.
         *
         * [--format]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp db columns wp_posts
         *     +-----------------------+---------------------+------+-----+---------------------+----------------+
         *     |         Field         |        Type         | Null | Key |       Default       |     Extra      |
         *     +-----------------------+---------------------+------+-----+---------------------+----------------+
         *     | ID                    | bigint(20) unsigned | NO   | PRI |                     | auto_increment |
         *     | post_author           | bigint(20) unsigned | NO   | MUL | 0                   |                |
         *     | post_date             | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
         *     | post_date_gmt         | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
         *     | post_content          | longtext            | NO   |     |                     |                |
         *     | post_title            | text                | NO   |     |                     |                |
         *     | post_excerpt          | text                | NO   |     |                     |                |
         *     | post_status           | varchar(20)         | NO   |     | publish             |                |
         *     | comment_status        | varchar(20)         | NO   |     | open                |                |
         *     | ping_status           | varchar(20)         | NO   |     | open                |                |
         *     | post_password         | varchar(255)        | NO   |     |                     |                |
         *     | post_name             | varchar(200)        | NO   | MUL |                     |                |
         *     | to_ping               | text                | NO   |     |                     |                |
         *     | pinged                | text                | NO   |     |                     |                |
         *     | post_modified         | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
         *     | post_modified_gmt     | datetime            | NO   |     | 0000-00-00 00:00:00 |                |
         *     | post_content_filtered | longtext            | NO   |     |                     |                |
         *     | post_parent           | bigint(20) unsigned | NO   | MUL | 0                   |                |
         *     | guid                  | varchar(255)        | NO   |     |                     |                |
         *     | menu_order            | int(11)             | NO   |     | 0                   |                |
         *     | post_type             | varchar(20)         | NO   | MUL | post                |                |
         *     | post_mime_type        | varchar(100)        | NO   |     |                     |                |
         *     | comment_count         | bigint(20)          | NO   |     | 0                   |                |
         *     +-----------------------+---------------------+------+-----+---------------------+----------------+
         *
         * @when after_wp_load
         */
        public function columns($args, $assoc_args)
        {
        }
        private static function get_create_query()
        {
        }
        /**
         * Run a single query via the 'mysql' binary.
         *
         * This includes the necessary setup to make sure the queries behave similar
         * to what WPDB produces.
         *
         * @param string $query      Query to execute.
         * @param array  $assoc_args Optional. Associative array of arguments.
         */
        protected function run_query($query, $assoc_args = [])
        {
        }
        /**
         * Run a MySQL command and optionally return the output.
         *
         * @param string $cmd           Command to run.
         * @param array  $assoc_args    Optional. Associative array of arguments to
         *                              use.
         * @param bool   $send_to_shell Optional. Whether to send STDOUT and STDERR
         *                              immediately to the shell. Defaults to true.
         *
         * @return array {
         *     Associative array containing STDOUT and STDERR output.
         *
         *     @type string $stdout    Output that was sent to STDOUT.
         *     @type string $stderr    Output that was sent to STDERR.
         *     @type int    $exit_code Exit code of the process.
         * }
         */
        private static function run($cmd, $assoc_args = [], $send_to_shell = \true)
        {
        }
        /**
         * Helper to pluck 'dbuser' and 'dbpass' from associative args array.
         *
         * @param array $assoc_args Associative args array.
         * @return array Array with `dbuser' and 'dbpass' set if in passed-in associative args array.
         */
        private static function get_dbuser_dbpass_args($assoc_args)
        {
        }
        /**
         * Gets the column names of a db table differentiated into key columns and text columns and all columns.
         *
         * @param string $table The table name.
         * @return array A 3 element array consisting of an array of primary key column names, an array of text column names, and an array containing all column names.
         */
        private static function get_columns($table)
        {
        }
        /**
         * Determines whether a column is considered text or not.
         *
         * @param string Column type.
         * @return bool True if text column, false otherwise.
         */
        private static function is_text_col($type)
        {
        }
        /**
         * Escapes (backticks) MySQL identifiers (aka schema object names) - i.e. column names, table names, and database/index/alias/view etc names.
         * See https://dev.mysql.com/doc/refman/5.5/en/identifiers.html
         *
         * @param string|array $idents A single identifier or an array of identifiers.
         * @return string|array An escaped string if given a string, or an array of escaped strings if given an array of strings.
         */
        private static function esc_sql_ident($idents)
        {
        }
        /**
         * Gets the color codes from the options if any, and returns the passed in array colorized with 2 elements per entry, a color code (or '') and a reset (or '').
         *
         * @param array $assoc_args The associative argument array passed to the command.
         * @param array $colors Array of default percent color code strings keyed by the 3 color contexts 'table_column', 'id', 'match'.
         * @return array Array containing 3 2-element arrays.
         */
        private function get_colors($assoc_args, $colors)
        {
        }
        /**
         * Helper to pluck `mysql` options from associative args array.
         *
         * @param array $assoc_args Associative args array.
         * @return array Array with `mysql` options set if in passed-in associative args array.
         */
        private static function get_mysql_args($assoc_args)
        {
        }
        /**
         * Writes out the `--no-defaults` flag for MySQL commands unless the --defaults flag is specified for the WP_CLI command.
         *
         * @param array $assoc_args Associative args array.
         * @return string Either the '--no-defaults' flag for use in the command or an empty string.
         */
        protected function get_defaults_flag_string(&$assoc_args)
        {
        }
        /**
         * Get the query to change the current SQL mode, and ensure its WordPress compatibility.
         *
         * If no modes are passed, it will ensure the current MySQL server modes are
         * compatible.
         *
         * Copied and adapted from WordPress Core code.
         *
         * @see https://github.com/WordPress/wordpress-develop/blob/5.4.0/src/wp-includes/wp-db.php#L817-L880
         *
         * @param array $assoc_args The associative argument array passed to the command.
         * @param array $modes      Optional. A list of SQL modes to set.
         * @return string Query string to use for setting the SQL modes to a
         *                compatible state.
         */
        protected function get_sql_mode_query($assoc_args, $modes = [])
        {
        }
        /**
         * Get the list of current SQL modes.
         *
         * @param array $assoc_args The associative argument array passed to the command.
         * @return string[] Array of SQL modes.
         */
        protected function get_current_sql_modes($assoc_args)
        {
        }
    }
}
namespace WP_CLI\Embeds {
    /**
     * Finds, triggers, and deletes oEmbed caches.
     */
    class Cache_Command extends \WP_CLI_Command
    {
        /**
         * Deletes all oEmbed caches for a given post.
         *
         * oEmbed caches for a post are stored in the post's metadata.
         *
         * ## OPTIONS
         *
         * <post_id>
         * : ID of the post to clear the cache for.
         *
         * ## EXAMPLES
         *
         *     # Clear cache for a post
         *     $ wp embed cache clear 123
         *     Success: Cleared oEmbed cache.
         */
        public function clear($args, $assoc_args)
        {
        }
        /**
         * Finds an oEmbed cache post ID for a given URL.
         *
         * Starting with WordPress 4.9, embeds that aren't associated with a specific post will be cached in
         * a new oembed_cache post type. There can be more than one such entry for a url depending on attributes and context.
         *
         * Not to be confused with oEmbed caches for a given post which are stored in the post's metadata.
         *
         * ## OPTIONS
         *
         * <url>
         * : URL to retrieve oEmbed data for.
         *
         * [--width=<width>]
         * : Width of the embed in pixels. Part of cache key so must match. Defaults to `content_width` if set else 500px, so is theme and context dependent.
         *
         * [--height=<height>]
         * : Height of the embed in pixels. Part of cache key so must match. Defaults to 1.5 * default width (`content_width` or 500px), to a maximum of 1000px.
         *
         * [--discover]
         * : Whether to search with the discover attribute set or not. Part of cache key so must match. If not given, will search with attribute: unset, '1', '0', returning first.
         *
         * ## EXAMPLES
         *
         *     # Find cache post ID for a given URL.
         *     $ wp embed cache find https://www.youtube.com/watch?v=dQw4w9WgXcQ --width=500
         *     123
         */
        public function find($args, $assoc_args)
        {
        }
        /**
         * Triggers the caching of all oEmbed results for a given post.
         *
         * oEmbed caches for a post are stored in the post's metadata.
         *
         * ## OPTIONS
         *
         * <post_id>
         * : ID of the post to do the caching for.
         *
         * ## EXAMPLES
         *
         *     # Triggers cache for a post
         *     $ wp embed cache trigger 456
         *     Success: Caching triggered!
         */
        public function trigger($args, $assoc_args)
        {
        }
    }
    /**
     * Inspects oEmbed providers, clears embed cache, and more.
     *
     * @package wp-cli
     */
    class Embeds_Namespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
    class Fetch_Command extends \WP_CLI_Command
    {
        /**
         * Attempts to convert a URL into embed HTML.
         *
         * In non-raw mode, starts by checking the URL against the regex of the registered embed handlers.
         * If none of the regex matches and it's enabled, then the URL will be given to the WP_oEmbed class.
         *
         * In raw mode, checks the providers directly and returns the data.
         *
         * ## OPTIONS
         *
         * <url>
         * : URL to retrieve oEmbed data for.
         *
         * [--width=<width>]
         * : Width of the embed in pixels.
         *
         * [--height=<height>]
         * : Height of the embed in pixels.
         *
         * [--post-id=<id>]
         * : Cache oEmbed response for a given post.
         *
         * [--discover]
         * : Enable oEmbed discovery. Defaults to true.
         *
         * [--skip-cache]
         * : Ignore already cached oEmbed responses. Has no effect if using the 'raw' option, which doesn't use the cache.
         *
         * [--skip-sanitization]
         * : Remove the filter that WordPress from 4.4 onwards uses to sanitize oEmbed responses. Has no effect if using the 'raw' option, which by-passes sanitization.
         *
         * [--do-shortcode]
         * : If the URL is handled by a registered embed handler and returns a shortcode, do shortcode and return result. Has no effect if using the 'raw' option, which by-passes handlers.
         *
         * [--limit-response-size=<size>]
         * : Limit the size of the resulting HTML when using discovery. Default 150 KB (the standard WordPress limit). Not compatible with 'no-discover'.
         *
         * [--raw]
         * : Return the raw oEmbed response instead of the resulting HTML. Ignores the cache and does not sanitize responses or use registered embed handlers.
         *
         * [--raw-format=<json|xml>]
         * : Render raw oEmbed data in a particular format. Defaults to json. Can only be specified in conjunction with the 'raw' option.
         * ---
         * options:
         *   - json
         *   - xml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get embed HTML for a given URL.
         *     $ wp embed fetch https://www.youtube.com/watch?v=dQw4w9WgXcQ
         *     <iframe width="525" height="295" src="https://www.youtube.com/embed/dQw4w9WgXcQ?feature=oembed" ...
         *
         *     # Get raw oEmbed data for a given URL.
         *     $ wp embed fetch https://www.youtube.com/watch?v=dQw4w9WgXcQ --raw
         *     {"author_url":"https:\/\/www.youtube.com\/user\/RickAstleyVEVO","width":525,"version":"1.0", ...
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Creates an XML string from a given array.
         *
         * Same as `\_oembed_create_xml()` in "wp-includes\embed.php" introduced in WP 4.4.0. Polyfilled as marked private (and also to cater for older WP versions).
         *
         * @see _oembed_create_xml()
         *
         * @param array            $data The original oEmbed response data.
         * @param \SimpleXMLElement $node Optional. XML node to append the result to recursively.
         * @return string|false XML string on success, false on error.
         */
        protected function oembed_create_xml($data, $node = null)
        {
        }
    }
    /**
     * Retrieves embed handlers.
     */
    class Handler_Command extends \WP_CLI_Command
    {
        protected $default_fields = array('id', 'regex');
        /**
         * Lists all available embed handlers.
         *
         * ## OPTIONS
         *
         * [--field=<field>]
         * : Display the value of a single field
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each handler:
         *
         * * id
         * * regex
         *
         * These fields are optionally available:
         *
         * * callback
         * * priority
         *
         * ## EXAMPLES
         *
         *     # List id,regex,priority fields of available handlers.
         *     $ wp embed handler list --fields=priority,id
         *     +----------+-------------------+
         *     | priority | id                |
         *     +----------+-------------------+
         *     | 10       | youtube_embed_url |
         *     | 9999     | audio             |
         *     | 9999     | video             |
         *
         * @subcommand list
         */
        public function list_handlers($args, $assoc_args)
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         * @return \WP_CLI\Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Retrieves oEmbed providers.
     */
    class Provider_Command extends \WP_CLI_Command
    {
        protected $default_fields = array('format', 'endpoint');
        /**
         * Lists all available oEmbed providers.
         *
         * ## OPTIONS
         *
         * [--field=<field>]
         * : Display the value of a single field
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         * ---
         *
         * [--force-regex]
         * : Turn the asterisk-type provider URLs into regexes.
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each provider:
         *
         * * format
         * * endpoint
         *
         * This field is optionally available:
         *
         * * regex
         *
         * ## EXAMPLES
         *
         *     # List format,endpoint fields of available providers.
         *     $ wp embed provider list --fields=format,endpoint
         *     +------------------------------+-----------------------------------------+
         *     | format                       | endpoint                                |
         *     +------------------------------+-----------------------------------------+
         *     | #https?://youtu\.be/.*#i     | https://www.youtube.com/oembed          |
         *     | #https?://flic\.kr/.*#i      | https://www.flickr.com/services/oembed/ |
         *     | #https?://wordpress\.tv/.*#i | https://wordpress.tv/oembed/            |
         *
         * @subcommand list
         */
        public function list_providers($args, $assoc_args)
        {
        }
        /**
         * Gets the matching provider for a given URL.
         *
         * ## OPTIONS
         *
         * <url>
         * : URL to retrieve provider for.
         *
         * [--discover]
         * : Whether to use oEmbed discovery or not. Defaults to true.
         *
         * [--limit-response-size=<size>]
         * : Limit the size of the resulting HTML when using discovery. Default 150 KB (the standard WordPress limit). Not compatible with 'no-discover'.
         *
         * [--link-type=<json|xml>]
         * : Whether to accept only a certain link type when using discovery. Defaults to any (json or xml), preferring json. Not compatible with 'no-discover'.
         * ---
         * options:
         *   - json
         *   - xml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get the matching provider for the URL.
         *     $ wp embed provider match https://www.youtube.com/watch?v=dQw4w9WgXcQ
         *     https://www.youtube.com/oembed
         *
         * @subcommand match
         */
        public function match_provider($args, $assoc_args)
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         * @return \WP_CLI\Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Polyfill for older WP versions.
     */
    class oEmbed extends \WP_oEmbed
    {
        /**
         * Takes a URL and returns the corresponding oEmbed provider's URL, if there is one.
         *
         * @since 4.0.0
         *
         * @see WP_oEmbed::discover()
         *
         * @param string        $url  The URL to the content.
         * @param string|array  $args Optional provider arguments.
         * @return false|string False on failure, otherwise the oEmbed provider URL.
         */
        public function get_provider($url, $args = '')
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Base class for WP-CLI commands that deal with database objects.
     *
     * @package wp-cli
     */
    abstract class CommandWithDBObject extends \WP_CLI_Command
    {
        /**
         * @var string $object_type WordPress' expected name for the object.
         */
        protected $obj_type;
        /**
         * @var string $obj_id_key Key representing object's PK field in db.
         */
        protected $obj_id_key = 'ID';
        /**
         * @var array $obj_fields Default fields to display for each object.
         */
        protected $obj_fields;
        /**
         * Create a given database object.
         * Exits with status.
         *
         * @param array $args Arguments passed to command. Generally unused.
         * @param array $assoc_args Parameters passed to command to be passed to callback.
         * @param string $callback Function used to create object.
         */
        protected function _create($args, $assoc_args, $callback)
        {
        }
        /**
         * Update a given database object.
         * Exits with status.
         *
         * @param array $args Collection of one or more object ids to update.
         * @param array $assoc_args Fields => values to update on each object.
         * @param string $callback Function used to update object.
         */
        protected function _update($args, $assoc_args, $callback)
        {
        }
        /**
         * Transforms arguments with '__' from CSV into expected arrays
         *
         * @param array $assoc_args
         * @return array
         */
        protected static function process_csv_arguments_to_arrays($assoc_args)
        {
        }
        /**
         * Delete a given database object.
         * Exits with status.
         *
         * @param array $args Collection of one or more object ids to delete.
         * @param array $assoc_args Any arguments needed for the callback function.
         * @param callable $callback Function used to delete object.
         */
        protected function _delete($args, $assoc_args, $callback)
        {
        }
        /**
         * Format callback response to consistent format.
         *
         * @param WP_Error|true $response Response from CRUD callback.
         * @param string        $success_msg
         * @return array
         */
        protected function wp_error_to_resp($response, $success_msg)
        {
        }
        /**
         * Display success or warning based on response; return proper exit code.
         *
         * @param array $response Formatted from a CRUD callback.
         * @return int $status
         */
        protected function success_or_failure($response)
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         * @return Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
        /**
         * Given a callback, display the URL for one or more objects.
         *
         * @param array $args One or more object references.
         * @param string $callback Function to get URL for the object.
         */
        protected function _url($args, $callback)
        {
        }
    }
}
namespace {
    /**
     * Creates, updates, deletes, and moderates comments.
     *
     * ## EXAMPLES
     *
     *     # Create a new comment.
     *     $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
     *     Success: Created comment 932.
     *
     *     # Update an existing comment.
     *     $ wp comment update 123 --comment_author='That Guy'
     *     Success: Updated comment 123.
     *
     *     # Delete an existing comment.
     *     $ wp comment delete 1337 --force
     *     Success: Deleted comment 1337.
     *
     *     # Delete all spam comments.
     *     $ wp comment delete $(wp comment list --status=spam --format=ids)
     *     Success: Deleted comment 264.
     *     Success: Deleted comment 262.
     *
     * @package wp-cli
     */
    class Comment_Command extends \WP_CLI\CommandWithDBObject
    {
        protected $obj_type = 'comment';
        protected $obj_id_key = 'comment_ID';
        protected $obj_fields = ['comment_ID', 'comment_post_ID', 'comment_date', 'comment_approved', 'comment_author', 'comment_author_email'];
        public function __construct()
        {
        }
        /**
         * Creates a new comment.
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : Associative args for the new comment. See wp_insert_comment().
         *
         * [--porcelain]
         * : Output just the new comment id.
         *
         * ## EXAMPLES
         *
         *     # Create comment.
         *     $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
         *     Success: Created comment 932.
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Updates one or more comments.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of comments to update.
         *
         * --<field>=<value>
         * : One or more fields to update. See wp_update_comment().
         *
         * ## EXAMPLES
         *
         *     # Update comment.
         *     $ wp comment update 123 --comment_author='That Guy'
         *     Success: Updated comment 123.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Generates some number of new dummy comments.
         *
         * Creates a specified number of new comments with dummy data.
         *
         * ## OPTIONS
         *
         * [--count=<number>]
         * : How many comments to generate?
         * ---
         * default: 100
         * ---
         *
         * [--post_id=<post-id>]
         * : Assign comments to a specific post.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: progress
         * options:
         *   - progress
         *   - ids
         * ---
         *
         * ## EXAMPLES
         *
         *     # Generate comments for the given post.
         *     $ wp comment generate --format=ids --count=3 --post_id=123
         *     138 139 140
         *
         *     # Add meta to every generated comment.
         *     $ wp comment generate --format=ids --count=3 | xargs -d ' ' -I % wp comment meta add % foo bar
         *     Success: Added custom field.
         *     Success: Added custom field.
         *     Success: Added custom field.
         */
        public function generate($args, $assoc_args)
        {
        }
        /**
         * Gets the data of a single comment.
         *
         * ## OPTIONS
         *
         * <id>
         * : The comment to get.
         *
         * [--field=<field>]
         * : Instead of returning the whole comment, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get comment.
         *     $ wp comment get 21 --field=content
         *     Thanks for all the comments, everyone!
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Gets a list of comments.
         *
         * Display comments based on all arguments supported by
         * [WP_Comment_Query()](https://developer.wordpress.org/reference/classes/WP_Comment_Query/__construct/).
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : One or more args to pass to WP_Comment_Query.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each comment.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - ids
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each comment:
         *
         * * comment_ID
         * * comment_post_ID
         * * comment_date
         * * comment_approved
         * * comment_author
         * * comment_author_email
         *
         * These fields are optionally available:
         *
         * * comment_author_url
         * * comment_author_IP
         * * comment_date_gmt
         * * comment_content
         * * comment_karma
         * * comment_agent
         * * comment_type
         * * comment_parent
         * * user_id
         * * url
         *
         * ## EXAMPLES
         *
         *     # List comment IDs.
         *     $ wp comment list --field=ID
         *     22
         *     23
         *     24
         *
         *     # List comments of a post.
         *     $ wp comment list --post_id=1 --fields=ID,comment_date,comment_author
         *     +------------+---------------------+----------------+
         *     | comment_ID | comment_date        | comment_author |
         *     +------------+---------------------+----------------+
         *     | 1          | 2015-06-20 09:00:10 | Mr WordPress   |
         *     +------------+---------------------+----------------+
         *
         *     # List approved comments.
         *     $ wp comment list --number=3 --status=approve --fields=ID,comment_date,comment_author
         *     +------------+---------------------+----------------+
         *     | comment_ID | comment_date        | comment_author |
         *     +------------+---------------------+----------------+
         *     | 1          | 2015-06-20 09:00:10 | Mr WordPress   |
         *     | 30         | 2013-03-14 12:35:07 | John Doe       |
         *     | 29         | 2013-03-14 11:56:08 | Jane Doe       |
         *     +------------+---------------------+----------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Deletes a comment.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of comments to delete.
         *
         * [--force]
         * : Skip the trash bin.
         *
         * ## EXAMPLES
         *
         *     # Delete comment.
         *     $ wp comment delete 1337 --force
         *     Success: Deleted comment 1337.
         *
         *     # Delete multiple comments.
         *     $ wp comment delete 1337 2341 --force
         *     Success: Deleted comment 1337.
         *     Success: Deleted comment 2341.
         */
        public function delete($args, $assoc_args)
        {
        }
        private function call($args, $status, $success, $failure)
        {
        }
        private function set_status($args, $status, $success)
        {
        }
        /**
         * Warns if `$_SERVER['SERVER_NAME']` not set as used in email from-address sent to post author in `wp_notify_postauthor()`.
         */
        private function check_server_name()
        {
        }
        /**
         * Trashes a comment.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to trash.
         *
         * ## EXAMPLES
         *
         *     # Trash comment.
         *     $ wp comment trash 1337
         *     Success: Trashed comment 1337.
         */
        public function trash($args, $assoc_args)
        {
        }
        /**
         * Untrashes a comment.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to untrash.
         *
         * ## EXAMPLES
         *
         *     # Untrash comment.
         *     $ wp comment untrash 1337
         *     Success: Untrashed comment 1337.
         */
        public function untrash($args, $assoc_args)
        {
        }
        /**
         * Marks a comment as spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to mark as spam.
         *
         * ## EXAMPLES
         *
         *     # Spam comment.
         *     $ wp comment spam 1337
         *     Success: Marked as spam comment 1337.
         */
        public function spam($args, $assoc_args)
        {
        }
        /**
         * Unmarks a comment as spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to unmark as spam.
         *
         * ## EXAMPLES
         *
         *     # Unspam comment.
         *     $ wp comment unspam 1337
         *     Success: Unspammed comment 1337.
         */
        public function unspam($args, $assoc_args)
        {
        }
        /**
         * Approves a comment.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to approve.
         *
         * ## EXAMPLES
         *
         *     # Approve comment.
         *     $ wp comment approve 1337
         *     Success: Approved comment 1337.
         */
        public function approve($args, $assoc_args)
        {
        }
        /**
         * Unapproves a comment.
         *
         * ## OPTIONS
         *
         * <id>...
         * : The IDs of the comments to unapprove.
         *
         * ## EXAMPLES
         *
         *     # Unapprove comment.
         *     $ wp comment unapprove 1337
         *     Success: Unapproved comment 1337.
         */
        public function unapprove($args, $assoc_args)
        {
        }
        /**
         * Counts comments, on whole blog or on a given post.
         *
         * ## OPTIONS
         *
         * [<post-id>]
         * : The ID of the post to count comments in.
         *
         * ## EXAMPLES
         *
         *     # Count comments on whole blog.
         *     $ wp comment count
         *     approved:        33
         *     spam:            3
         *     trash:           1
         *     post-trashed:    0
         *     all:             34
         *     moderated:       1
         *     total_comments:  37
         *
         *     # Count comments in a post.
         *     $ wp comment count 42
         *     approved:        19
         *     spam:            0
         *     trash:           0
         *     post-trashed:    0
         *     all:             19
         *     moderated:       0
         *     total_comments:  19
         */
        public function count($args, $assoc_args)
        {
        }
        /**
         * Recalculates the comment_count value for one or more posts.
         *
         * ## OPTIONS
         *
         * <id>...
         * : IDs for one or more posts to update.
         *
         * ## EXAMPLES
         *
         *     # Recount comment for the post.
         *     $ wp comment recount 123
         *     Updated post 123 comment count to 67.
         */
        public function recount($args)
        {
        }
        /**
         * Gets the status of a comment.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the comment to check.
         *
         * ## EXAMPLES
         *
         *     # Get status of comment.
         *     $ wp comment status 1337
         *     approved
         */
        public function status($args, $assoc_args)
        {
        }
        /**
         * Verifies whether a comment exists.
         *
         * Displays a success message if the comment does exist.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the comment to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether comment exists.
         *     $ wp comment exists 1337
         *     Success: Comment with ID 1337 exists.
         */
        public function exists($args)
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Base class for WP-CLI commands that deal with metadata
     *
     * @package wp-cli
     */
    abstract class CommandWithMeta extends \WP_CLI_Command
    {
        protected $meta_type;
        /**
         * List all metadata associated with an object.
         *
         * ## OPTIONS
         *
         * <id>
         * : ID for the object.
         *
         * [--keys=<keys>]
         * : Limit output to metadata of specific keys.
         *
         * [--fields=<fields>]
         * : Limit the output to specific row fields. Defaults to id,meta_key,meta_value.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         *   - count
         * ---
         *
         * [--orderby=<fields>]
         * : Set orderby which field.
         * ---
         * default: id
         * options:
         *  - id
         *  - meta_key
         *  - meta_value
         * ---
         *
         * [--order=<order>]
         * : Set ascending or descending order.
         * ---
         * default: asc
         * options:
         *  - asc
         *  - desc
         * ---
         *
         * [--unserialize]
         * : Unserialize meta_value output.
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Get meta field value.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * <key>
         * : The name of the meta field to get.
         *
         * [--format=<format>]
         * : Get value in a particular format.
         * ---
         * default: var_export
         * options:
         *   - var_export
         *   - json
         *   - yaml
         * ---
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Delete a meta field.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * [<key>]
         * : The name of the meta field to delete.
         *
         * [<value>]
         * : The value to delete. If omitted, all rows with key will deleted.
         *
         * [--all]
         * : Delete all meta for the object.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Add a meta field.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * <key>
         * : The name of the meta field to create.
         *
         * [<value>]
         * : The value of the meta field. If omitted, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Update a meta field.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * <key>
         * : The name of the meta field to update.
         *
         * [<value>]
         * : The new value. If omitted, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * @alias set
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Get a nested value from a meta field.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * <key>
         * : The name of the meta field to get.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to pluck.
         *
         * [--format=<format>]
         * : The output format of the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         *   - yaml
         */
        public function pluck($args, $assoc_args)
        {
        }
        /**
         * Update a nested value for a meta field.
         *
         * ## OPTIONS
         *
         * <action>
         * : Patch action to perform.
         * ---
         * options:
         *   - insert
         *   - update
         *   - delete
         * ---
         *
         * <id>
         * : The ID of the object.
         *
         * <key>
         * : The name of the meta field to update.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to patch.
         *
         * [<value>]
         * : The new value. If omitted, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         */
        public function patch($args, $assoc_args)
        {
        }
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
        /**
         * Get the fields for this object's meta
         *
         * @return array
         */
        private function get_fields()
        {
        }
        /**
         * Check that the object ID exists
         *
         * @param int
         */
        protected function check_object_id($object_id)
        {
        }
    }
}
namespace {
    /**
     * Adds, updates, deletes, and lists comment custom fields.
     *
     * ## EXAMPLES
     *
     *     # Set comment meta
     *     $ wp comment meta set 123 description "Mary is a WordPress developer."
     *     Success: Updated custom field 'description'.
     *
     *     # Get comment meta
     *     $ wp comment meta get 123 description
     *     Mary is a WordPress developer.
     *
     *     # Update comment meta
     *     $ wp comment meta update 123 description "Mary is an awesome WordPress developer."
     *     Success: Updated custom field 'description'.
     *
     *     # Delete comment meta
     *     $ wp comment meta delete 123 description
     *     Success: Deleted custom field.
     */
    class Comment_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'comment';
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = \false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
        /**
         * Check that the comment ID exists
         *
         * @param int
         */
        protected function check_object_id($object_id)
        {
        }
    }
    /**
     * Lists, creates, assigns, and deletes the active theme's navigation menus.
     *
     * See the [Navigation Menus](https://developer.wordpress.org/themes/functionality/navigation-menus/) reference in the Theme Handbook.
     *
     * ## EXAMPLES
     *
     *     # Create a new menu
     *     $ wp menu create "My Menu"
     *     Success: Created menu 200.
     *
     *     # List existing menus
     *     $ wp menu list
     *     +---------+----------+----------+-----------+-------+
     *     | term_id | name     | slug     | locations | count |
     *     +---------+----------+----------+-----------+-------+
     *     | 200     | My Menu  | my-menu  |           | 0     |
     *     | 177     | Top Menu | top-menu | primary   | 7     |
     *     +---------+----------+----------+-----------+-------+
     *
     *     # Create a new menu link item
     *     $ wp menu item add-custom my-menu Apple http://apple.com --porcelain
     *     1922
     *
     *     # Assign the 'my-menu' menu to the 'primary' location
     *     $ wp menu location assign my-menu primary
     *     Success: Assigned location to menu.
     *
     * @package wp-cli
     */
    class Menu_Command extends \WP_CLI_Command
    {
        protected $obj_type = 'nav_menu';
        protected $obj_fields = ['term_id', 'name', 'slug', 'locations', 'count'];
        /**
         * Creates a new menu.
         *
         * ## OPTIONS
         *
         * <menu-name>
         * : A descriptive name for the menu.
         *
         * [--porcelain]
         * : Output just the new menu id.
         *
         * ## EXAMPLES
         *
         *     $ wp menu create "My Menu"
         *     Success: Created menu 200.
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Deletes one or more menus.
         *
         * ## OPTIONS
         *
         * <menu>...
         * : The name, slug, or term ID for the menu(s).
         *
         * ## EXAMPLES
         *
         *     $ wp menu delete "My Menu"
         *     Success: 1 menu deleted.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Gets a list of menus.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - ids
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each menu:
         *
         * * term_id
         * * name
         * * slug
         * * count
         *
         * These fields are optionally available:
         *
         * * term_group
         * * term_taxonomy_id
         * * taxonomy
         * * description
         * * parent
         * * locations
         *
         * ## EXAMPLES
         *
         *     $ wp menu list
         *     +---------+----------+----------+-----------+-------+
         *     | term_id | name     | slug     | locations | count |
         *     +---------+----------+----------+-----------+-------+
         *     | 200     | My Menu  | my-menu  |           | 0     |
         *     | 177     | Top Menu | top-menu | primary   | 7     |
         *     +---------+----------+----------+-----------+-------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        protected function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * List, add, and delete items associated with a menu.
     *
     * ## EXAMPLES
     *
     *     # Add an existing post to an existing menu
     *     $ wp menu item add-post sidebar-menu 33 --title="Custom Test Post"
     *     Success: Menu item added.
     *
     *     # Create a new menu link item
     *     $ wp menu item add-custom sidebar-menu Apple http://apple.com
     *     Success: Menu item added.
     *
     *     # Delete menu item
     *     $ wp menu item delete 45
     *     Success: 1 menu item deleted.
     */
    class Menu_Item_Command extends \WP_CLI_Command
    {
        protected $obj_fields = ['db_id', 'type', 'title', 'link', 'position'];
        /**
         * Gets a list of items associated with a menu.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - ids
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each menu item:
         *
         * * db_id
         * * type
         * * title
         * * link
         * * position
         *
         * These fields are optionally available:
         *
         * * menu_item_parent
         * * object_id
         * * object
         * * type
         * * type_label
         * * target
         * * attr_title
         * * description
         * * classes
         * * xfn
         *
         * ## EXAMPLES
         *
         *     $ wp menu item list main-menu
         *     +-------+-----------+-------------+---------------------------------+----------+
         *     | db_id | type      | title       | link                            | position |
         *     +-------+-----------+-------------+---------------------------------+----------+
         *     | 5     | custom    | Home        | http://example.com              | 1        |
         *     | 6     | post_type | Sample Page | http://example.com/sample-page/ | 2        |
         *     +-------+-----------+-------------+---------------------------------+----------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Adds a post as a menu item.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * <post-id>
         * : Post ID to add to the menu.
         *
         * [--title=<title>]
         * : Set a custom title for the menu item.
         *
         * [--link=<link>]
         * : Set a custom url for the menu item.
         *
         * [--description=<description>]
         * : Set a custom description for the menu item.
         *
         * [--attr-title=<attr-title>]
         * : Set a custom title attribute for the menu item.
         *
         * [--target=<target>]
         * : Set a custom link target for the menu item.
         *
         * [--classes=<classes>]
         * : Set a custom link classes for the menu item.
         *
         * [--position=<position>]
         * : Specify the position of this menu item.
         *
         * [--parent-id=<parent-id>]
         * : Make this menu item a child of another menu item.
         *
         * [--porcelain]
         * : Output just the new menu item id.
         *
         * ## EXAMPLES
         *
         *     $ wp menu item add-post sidebar-menu 33 --title="Custom Test Post"
         *     Success: Menu item added.
         *
         * @subcommand add-post
         */
        public function add_post($args, $assoc_args)
        {
        }
        /**
         * Adds a taxonomy term as a menu item.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * <taxonomy>
         * : Taxonomy of the term to be added.
         *
         * <term-id>
         * : Term ID of the term to be added.
         *
         * [--title=<title>]
         * : Set a custom title for the menu item.
         *
         * [--link=<link>]
         * : Set a custom url for the menu item.
         *
         * [--description=<description>]
         * : Set a custom description for the menu item.
         *
         * [--attr-title=<attr-title>]
         * : Set a custom title attribute for the menu item.
         *
         * [--target=<target>]
         * : Set a custom link target for the menu item.
         *
         * [--classes=<classes>]
         * : Set a custom link classes for the menu item.
         *
         * [--position=<position>]
         * : Specify the position of this menu item.
         *
         * [--parent-id=<parent-id>]
         * : Make this menu item a child of another menu item.
         *
         * [--porcelain]
         * : Output just the new menu item id.
         *
         * ## EXAMPLES
         *
         *     $ wp menu item add-term sidebar-menu post_tag 24
         *     Success: Menu item added.
         *
         * @subcommand add-term
         */
        public function add_term($args, $assoc_args)
        {
        }
        /**
         * Adds a custom menu item.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * <title>
         * : Title for the link.
         *
         * <link>
         * : Target URL for the link.
         *
         * [--description=<description>]
         * : Set a custom description for the menu item.
         *
         * [--attr-title=<attr-title>]
         * : Set a custom title attribute for the menu item.
         *
         * [--target=<target>]
         * : Set a custom link target for the menu item.
         *
         * [--classes=<classes>]
         * : Set a custom link classes for the menu item.
         *
         * [--position=<position>]
         * : Specify the position of this menu item.
         *
         * [--parent-id=<parent-id>]
         * : Make this menu item a child of another menu item.
         *
         * [--porcelain]
         * : Output just the new menu item id.
         *
         * ## EXAMPLES
         *
         *     $ wp menu item add-custom sidebar-menu Apple http://apple.com
         *     Success: Menu item added.
         *
         * @subcommand add-custom
         */
        public function add_custom($args, $assoc_args)
        {
        }
        /**
         * Updates a menu item.
         *
         * ## OPTIONS
         *
         * <db-id>
         * : Database ID for the menu item.
         *
         * [--title=<title>]
         * : Set a custom title for the menu item.
         *
         * [--link=<link>]
         * : Set a custom url for the menu item.
         *
         * [--description=<description>]
         * : Set a custom description for the menu item.
         *
         * [--attr-title=<attr-title>]
         * : Set a custom title attribute for the menu item.
         *
         * [--target=<target>]
         * : Set a custom link target for the menu item.
         *
         * [--classes=<classes>]
         * : Set a custom link classes for the menu item.
         *
         * [--position=<position>]
         * : Specify the position of this menu item.
         *
         * [--parent-id=<parent-id>]
         * : Make this menu item a child of another menu item.
         *
         * ## EXAMPLES
         *
         *     $ wp menu item update 45 --title=WordPress --link='http://wordpress.org' --target=_blank --position=2
         *     Success: Menu item updated.
         *
         * @subcommand update
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Deletes one or more items from a menu.
         *
         * ## OPTIONS
         *
         * <db-id>...
         * : Database ID for the menu item(s).
         *
         * ## EXAMPLES
         *
         *     $ wp menu item delete 45
         *     Success: 1 menu item deleted.
         *
         * @subcommand delete
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Worker method to create new items or update existing ones.
         */
        private function add_or_update_item($method, $type, $args, $assoc_args)
        {
        }
        protected function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Assigns, removes, and lists a menu's locations.
     *
     * ## EXAMPLES
     *
     *     # List available menu locations
     *     $ wp menu location list
     *     +----------+-------------------+
     *     | location | description       |
     *     +----------+-------------------+
     *     | primary  | Primary Menu      |
     *     | social   | Social Links Menu |
     *     +----------+-------------------+
     *
     *     # Assign the 'primary-menu' menu to the 'primary' location
     *     $ wp menu location assign primary-menu primary
     *     Success: Assigned location to menu.
     *
     *     # Remove the 'primary-menu' menu from the 'primary' location
     *     $ wp menu location remove primary-menu primary
     *     Success: Removed location from menu.
     */
    class Menu_Location_Command extends \WP_CLI_Command
    {
        /**
         * Lists locations for the current theme.
         *
         * ## OPTIONS
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         *   - ids
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each location:
         *
         * * name
         * * description
         *
         * ## EXAMPLES
         *
         *     $ wp menu location list
         *     +----------+-------------------+
         *     | location | description       |
         *     +----------+-------------------+
         *     | primary  | Primary Menu      |
         *     | social   | Social Links Menu |
         *     +----------+-------------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Assigns a location to a menu.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * <location>
         * : Location's slug.
         *
         * ## EXAMPLES
         *
         *     $ wp menu location assign primary-menu primary
         *     Success: Assigned location primary to menu primary-menu.
         *
         * @subcommand assign
         */
        public function assign($args, $assoc_args)
        {
        }
        /**
         * Removes a location from a menu.
         *
         * ## OPTIONS
         *
         * <menu>
         * : The name, slug, or term ID for the menu.
         *
         * <location>
         * : Location's slug.
         *
         * ## EXAMPLES
         *
         *     $ wp menu location remove primary-menu primary
         *     Success: Removed location from menu.
         *
         * @subcommand remove
         */
        public function remove($args, $assoc_args)
        {
        }
    }
    /**
     * Gets, adds, updates, deletes, and lists network custom fields.
     *
     * ## EXAMPLES
     *
     *     # Get a list of super-admins
     *     $ wp network meta get 1 site_admins
     *     array (
     *       0 => 'supervisor',
     *     )
     */
    class Network_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'site';
    }
    /**
     * Perform network-wide operations.
     *
     * ## EXAMPLES
     *
     *     # Get a list of super-admins
     *     $ wp network meta get 1 site_admins
     *     array (
     *       0 => 'supervisor',
     *     )
     */
    class Network_Namespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
    /**
     * Retrieves and sets site options, including plugin and WordPress settings.
     *
     * See the [Plugin Settings API](https://developer.wordpress.org/plugins/settings/settings-api/) and the [Theme Options](https://developer.wordpress.org/themes/customize-api/) for more information on adding customized options.
     *
     * ## EXAMPLES
     *
     *     # Get site URL.
     *     $ wp option get siteurl
     *     http://example.com
     *
     *     # Add option.
     *     $ wp option add my_option foobar
     *     Success: Added 'my_option' option.
     *
     *     # Update option.
     *     $ wp option update my_option '{"foo": "bar"}' --format=json
     *     Success: Updated 'my_option' option.
     *
     *     # Delete option.
     *     $ wp option delete my_option
     *     Success: Deleted 'my_option' option.
     *
     * @package wp-cli
     */
    class Option_Command extends \WP_CLI_Command
    {
        /**
         * Gets the value for an option.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the option.
         *
         * [--format=<format>]
         * : Get value in a particular format.
         * ---
         * default: var_export
         * options:
         *   - var_export
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get option.
         *     $ wp option get home
         *     http://example.com
         *
         *     # Get blog description.
         *     $ wp option get blogdescription
         *     A random blog description
         *
         *     # Get blog name
         *     $ wp option get blogname
         *     A random blog name
         *
         *     # Get admin email.
         *     $ wp option get admin_email
         *     someone@example.com
         *
         *     # Get option in JSON format.
         *     $ wp option get active_plugins --format=json
         *     {"0":"dynamically-dynamic-sidebar\/dynamically-dynamic-sidebar.php","1":"monster-widget\/monster-widget.php","2":"show-current-template\/show-current-template.php","3":"theme-check\/theme-check.php","5":"wordpress-importer\/wordpress-importer.php"}
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Adds a new option value.
         *
         * Errors if the option already exists.
         *
         * ## OPTIONS
         *
         * <key>
         * : The name of the option to add.
         *
         * [<value>]
         * : The value of the option to add. If ommited, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * [--autoload=<autoload>]
         * : Should this option be automatically loaded.
         * ---
         * options:
         *   - 'yes'
         *   - 'no'
         * ---
         *
         * ## EXAMPLES
         *
         *     # Create an option by reading a JSON file.
         *     $ wp option add my_option --format=json < config.json
         *     Success: Added 'my_option' option.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Lists options and their values.
         *
         * ## OPTIONS
         *
         * [--search=<pattern>]
         * : Use wildcards ( * and ? ) to match option name.
         *
         * [--exclude=<pattern>]
         * : Pattern to exclude. Use wildcards ( * and ? ) to match option name.
         *
         * [--autoload=<value>]
         * : Match only autoload options when value is on, and only not-autoload option when off.
         *
         * [--transients]
         * : List only transients. Use `--no-transients` to ignore all transients.
         *
         * [--unserialize]
         * : Unserialize option values in output.
         *
         * [--field=<field>]
         * : Prints the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : The serialization format for the value. total_bytes displays the total size of matching options in bytes.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - count
         *   - yaml
         *   - total_bytes
         * ---
         *
         * [--orderby=<fields>]
         * : Set orderby which field.
         * ---
         * default: option_id
         * options:
         *  - option_id
         *  - option_name
         *  - option_value
         * ---
         *
         * [--order=<order>]
         * : Set ascending or descending order.
         * ---
         * default: asc
         * options:
         *  - asc
         *  - desc
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * This field will be displayed by default for each matching option:
         *
         * * option_name
         * * option_value
         *
         * These fields are optionally available:
         *
         * * autoload
         * * size_bytes
         *
         * ## EXAMPLES
         *
         *     # Get the total size of all autoload options.
         *     $ wp option list --autoload=on --format=total_bytes
         *     33198
         *
         *     # Find biggest transients.
         *     $ wp option list --search="*_transient_*" --fields=option_name,size_bytes | sort -n -k 2 | tail
         *     option_name size_bytes
         *     _site_transient_timeout_theme_roots 10
         *     _site_transient_theme_roots 76
         *     _site_transient_update_themes   181
         *     _site_transient_update_core 808
         *     _site_transient_update_plugins  6645
         *
         *     # List all options beginning with "i2f_".
         *     $ wp option list --search="i2f_*"
         *     +-------------+--------------+
         *     | option_name | option_value |
         *     +-------------+--------------+
         *     | i2f_version | 0.1.0        |
         *     +-------------+--------------+
         *
         *     # Delete all options beginning with "theme_mods_".
         *     $ wp option list --search="theme_mods_*" --field=option_name | xargs -I % wp option delete %
         *     Success: Deleted 'theme_mods_twentysixteen' option.
         *     Success: Deleted 'theme_mods_twentyfifteen' option.
         *     Success: Deleted 'theme_mods_twentyfourteen' option.
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Updates an option value.
         *
         * ## OPTIONS
         *
         * <key>
         * : The name of the option to update.
         *
         * [<value>]
         * : The new value. If ommited, the value is read from STDIN.
         *
         * [--autoload=<autoload>]
         * : Requires WP 4.2. Should this option be automatically loaded.
         * ---
         * options:
         *   - 'yes'
         *   - 'no'
         * ---
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Update an option by reading from a file.
         *     $ wp option update my_option < value.txt
         *     Success: Updated 'my_option' option.
         *
         *     # Update one option on multiple sites using xargs.
         *     $ wp site list --field=url | xargs -n1 -I {} sh -c 'wp --url={} option update my_option my_value'
         *     Success: Updated 'my_option' option.
         *     Success: Updated 'my_option' option.
         *
         *     # Update site blog name.
         *     $ wp option update blogname "Random blog name"
         *     Success: Updated 'blogname' option.
         *
         *     # Update site blog description.
         *     $ wp option update blogdescription "Some random blog description"
         *     Success: Updated 'blogdescription' option.
         *
         *     # Update admin email address.
         *     $ wp option update admin_email someone@example.com
         *     Success: Updated 'admin_email' option.
         *
         *     # Set the default role.
         *     $ wp option update default_role author
         *     Success: Updated 'default_role' option.
         *
         *     # Set the timezone string.
         *     $ wp option update timezone_string "America/New_York"
         *     Success: Updated 'timezone_string' option.
         *
         * @alias set
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Deletes an option.
         *
         * ## OPTIONS
         *
         * <key>...
         * : Key for the option.
         *
         * ## EXAMPLES
         *
         *     # Delete an option.
         *     $ wp option delete my_option
         *     Success: Deleted 'my_option' option.
         *
         *     # Delete multiple options.
         *     $ wp option delete option_one option_two option_three
         *     Success: Deleted 'option_one' option.
         *     Success: Deleted 'option_two' option.
         *     Warning: Could not delete 'option_three' option. Does it exist?
         */
        public function delete($args)
        {
        }
        /**
         * Gets a nested value from an option.
         *
         * ## OPTIONS
         *
         * <key>
         * : The option name.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to pluck.
         *
         * [--format=<format>]
         * : The output format of the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         *   - yaml
         * ---
         */
        public function pluck($args, $assoc_args)
        {
        }
        /**
         * Updates a nested value in an option.
         *
         * ## OPTIONS
         *
         * <action>
         * : Patch action to perform.
         * ---
         * options:
         *   - insert
         *   - update
         *   - delete
         * ---
         *
         * <key>
         * : The option name.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to patch.
         *
         * [<value>]
         * : The new value. If omitted, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         */
        public function patch($args, $assoc_args)
        {
        }
        private static function esc_like($old)
        {
        }
    }
    /**
     * Manages posts, content, and meta.
     *
     * ## EXAMPLES
     *
     *     # Create a new post.
     *     $ wp post create --post_type=post --post_title='A sample post'
     *     Success: Created post 123.
     *
     *     # Update an existing post.
     *     $ wp post update 123 --post_status=draft
     *     Success: Updated post 123.
     *
     *     # Delete an existing post.
     *     $ wp post delete 123
     *     Success: Trashed post 123.
     *
     * @package wp-cli
     */
    class Post_Command extends \WP_CLI\CommandWithDBObject
    {
        protected $obj_type = 'post';
        protected $obj_fields = ['ID', 'post_title', 'post_name', 'post_date', 'post_status'];
        public function __construct()
        {
        }
        /**
         * Creates a new post.
         *
         * ## OPTIONS
         *
         * [--post_author=<post_author>]
         * : The ID of the user who added the post. Default is the current user ID.
         *
         * [--post_date=<post_date>]
         * : The date of the post. Default is the current time.
         *
         * [--post_date_gmt=<post_date_gmt>]
         * : The date of the post in the GMT timezone. Default is the value of $post_date.
         *
         * [--post_content=<post_content>]
         * : The post content. Default empty.
         *
         * [--post_content_filtered=<post_content_filtered>]
         * : The filtered post content. Default empty.
         *
         * [--post_title=<post_title>]
         * : The post title. Default empty.
         *
         * [--post_excerpt=<post_excerpt>]
         * : The post excerpt. Default empty.
         *
         * [--post_status=<post_status>]
         * : The post status. Default 'draft'.
         *
         * [--post_type=<post_type>]
         * : The post type. Default 'post'.
         *
         * [--comment_status=<comment_status>]
         * : Whether the post can accept comments. Accepts 'open' or 'closed'. Default is the value of 'default_comment_status' option.
         *
         * [--ping_status=<ping_status>]
         * : Whether the post can accept pings. Accepts 'open' or 'closed'. Default is the value of 'default_ping_status' option.
         *
         * [--post_password=<post_password>]
         * : The password to access the post. Default empty.
         *
         * [--post_name=<post_name>]
         * : The post name. Default is the sanitized post title when creating a new post.
         *
         * [--from-post=<post_id>]
         * : Post id of a post to be duplicated.
         *
         * [--to_ping=<to_ping>]
         * : Space or carriage return-separated list of URLs to ping. Default empty.
         *
         * [--pinged=<pinged>]
         * : Space or carriage return-separated list of URLs that have been pinged. Default empty.
         *
         * [--post_modified=<post_modified>]
         * : The date when the post was last modified. Default is the current time.
         *
         * [--post_modified_gmt=<post_modified_gmt>]
         * : The date when the post was last modified in the GMT timezone. Default is the current time.
         *
         * [--post_parent=<post_parent>]
         * : Set this for the post it belongs to, if any. Default 0.
         *
         * [--menu_order=<menu_order>]
         * : The order the post should be displayed in. Default 0.
         *
         * [--post_mime_type=<post_mime_type>]
         * : The mime type of the post. Default empty.
         *
         * [--guid=<guid>]
         * : Global Unique ID for referencing the post. Default empty.
         *
         * [--post_category=<post_category>]
         * : Array of category names, slugs, or IDs. Defaults to value of the 'default_category' option.
         *
         * [--tags_input=<tags_input>]
         * : Array of tag names, slugs, or IDs. Default empty.
         *
         * [--tax_input=<tax_input>]
         * : Array of taxonomy terms keyed by their taxonomy name. Default empty.
         *
         * [--meta_input=<meta_input>]
         * : Array in JSON format of post meta values keyed by their post meta key. Default empty.
         *
         * [<file>]
         * : Read post content from <file>. If this value is present, the
         *     `--post_content` argument will be ignored.
         *
         *   Passing `-` as the filename will cause post content to
         *   be read from STDIN.
         *
         * [--<field>=<value>]
         * : Associative args for the new post. See wp_insert_post().
         *
         * [--edit]
         * : Immediately open system's editor to write or edit post content.
         *
         *   If content is read from a file, from STDIN, or from the `--post_content`
         *   argument, that text will be loaded into the editor.
         *
         * [--porcelain]
         * : Output just the new post id.
         *
         *
         * ## EXAMPLES
         *
         *     # Create post and schedule for future
         *     $ wp post create --post_type=page --post_title='A future post' --post_status=future --post_date='2020-12-01 07:00:00'
         *     Success: Created post 1921.
         *
         *     # Create post with content from given file
         *     $ wp post create ./post-content.txt --post_category=201,345 --post_title='Post from file'
         *     Success: Created post 1922.
         *
         *     # Create a post with multiple meta values.
         *     $ wp post create --post_title='A post' --post_content='Just a small post.' --meta_input='{"key1":"value1","key2":"value2"}'
         *     Success: Created post 1923.
         *
         *     # Create a duplicate post from existing posts.
         *     $ wp post create --from-post=123 --post_title='Different Title'
         *     Success: Created post 2350.
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Updates one or more existing posts.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of posts to update.
         *
         * [--post_author=<post_author>]
         * : The ID of the user who added the post. Default is the current user ID.
         *
         * [--post_date=<post_date>]
         * : The date of the post. Default is the current time.
         *
         * [--post_date_gmt=<post_date_gmt>]
         * : The date of the post in the GMT timezone. Default is the value of $post_date.
         *
         * [--post_content=<post_content>]
         * : The post content. Default empty.
         *
         * [--post_content_filtered=<post_content_filtered>]
         * : The filtered post content. Default empty.
         *
         * [--post_title=<post_title>]
         * : The post title. Default empty.
         *
         * [--post_excerpt=<post_excerpt>]
         * : The post excerpt. Default empty.
         *
         * [--post_status=<post_status>]
         * : The post status. Default 'draft'.
         *
         * [--post_type=<post_type>]
         * : The post type. Default 'post'.
         *
         * [--comment_status=<comment_status>]
         * : Whether the post can accept comments. Accepts 'open' or 'closed'. Default is the value of 'default_comment_status' option.
         *
         * [--ping_status=<ping_status>]
         * : Whether the post can accept pings. Accepts 'open' or 'closed'. Default is the value of 'default_ping_status' option.
         *
         * [--post_password=<post_password>]
         * : The password to access the post. Default empty.
         *
         * [--post_name=<post_name>]
         * : The post name. Default is the sanitized post title when creating a new post.
         *
         * [--to_ping=<to_ping>]
         * : Space or carriage return-separated list of URLs to ping. Default empty.
         *
         * [--pinged=<pinged>]
         * : Space or carriage return-separated list of URLs that have been pinged. Default empty.
         *
         * [--post_modified=<post_modified>]
         * : The date when the post was last modified. Default is the current time.
         *
         * [--post_modified_gmt=<post_modified_gmt>]
         * : The date when the post was last modified in the GMT timezone. Default is the current time.
         *
         * [--post_parent=<post_parent>]
         * : Set this for the post it belongs to, if any. Default 0.
         *
         * [--menu_order=<menu_order>]
         * : The order the post should be displayed in. Default 0.
         *
         * [--post_mime_type=<post_mime_type>]
         * : The mime type of the post. Default empty.
         *
         * [--guid=<guid>]
         * : Global Unique ID for referencing the post. Default empty.
         *
         * [--post_category=<post_category>]
         * : Array of category names, slugs, or IDs. Defaults to value of the 'default_category' option.
         *
         * [--tags_input=<tags_input>]
         * : Array of tag names, slugs, or IDs. Default empty.
         *
         * [--tax_input=<tax_input>]
         * : Array of taxonomy terms keyed by their taxonomy name. Default empty.
         *
         * [--meta_input=<meta_input>]
         * : Array in JSON format of post meta values keyed by their post meta key. Default empty.
         *
         * [<file>]
         * : Read post content from <file>. If this value is present, the
         *     `--post_content` argument will be ignored.
         *
         *   Passing `-` as the filename will cause post content to
         *   be read from STDIN.
         *
         * --<field>=<value>
         * : One or more fields to update. See wp_insert_post().
         *
         * [--defer-term-counting]
         * : Recalculate term count in batch, for a performance boost.
         *
         * ## EXAMPLES
         *
         *     $ wp post update 123 --post_name=something --post_status=draft
         *     Success: Updated post 123.
         *
         *     # Update a post with multiple meta values.
         *     $ wp post update 123 --meta_input='{"key1":"value1","key2":"value2"}'
         *     Success: Updated post 123.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Launches system editor to edit post content.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the post to edit.
         *
         * ## EXAMPLES
         *
         *     # Launch system editor to edit post
         *     $ wp post edit 123
         */
        public function edit($args, $assoc_args)
        {
        }
        // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore -- Whitelisting to provide backward compatibility to classes possibly extending this class.
        protected function _edit($content, $title)
        {
        }
        /**
         * Gets details about a post.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the post to get.
         *
         * [--field=<field>]
         * : Instead of returning the whole post, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Save the post content to a file
         *     $ wp post get 123 --field=content > file.txt
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Deletes an existing post.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of posts to delete.
         *
         * [--force]
         * : Skip the trash bin.
         *
         * [--defer-term-counting]
         * : Recalculate term count in batch, for a performance boost.
         *
         * ## EXAMPLES
         *
         *     # Delete post skipping trash
         *     $ wp post delete 123 --force
         *     Success: Deleted post 123.
         *
         *     # Delete all pages
         *     $ wp post delete $(wp post list --post_type='page' --format=ids)
         *     Success: Trashed post 1164.
         *     Success: Trashed post 1186.
         *
         *     # Delete all posts in the trash
         *     $ wp post delete $(wp post list --post_status=trash --format=ids)
         *     Success: Deleted post 1268.
         *     Success: Deleted post 1294.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Callback used to delete a post.
         *
         * @param $post_id
         * @param $assoc_args
         * @return array
         */
        protected function delete_callback($post_id, $assoc_args)
        {
        }
        /**
         * Gets a list of posts.
         *
         * Display posts based on all arguments supported by
         * [WP_Query()](https://developer.wordpress.org/reference/classes/wp_query/).
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : One or more args to pass to WP_Query.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each post.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each post:
         *
         * * ID
         * * post_title
         * * post_name
         * * post_date
         * * post_status
         *
         * These fields are optionally available:
         *
         * * post_author
         * * post_date_gmt
         * * post_content
         * * post_excerpt
         * * comment_status
         * * ping_status
         * * post_password
         * * to_ping
         * * pinged
         * * post_modified
         * * post_modified_gmt
         * * post_content_filtered
         * * post_parent
         * * guid
         * * menu_order
         * * post_type
         * * post_mime_type
         * * comment_count
         * * filter
         * * url
         *
         * ## EXAMPLES
         *
         *     # List post
         *     $ wp post list --field=ID
         *     568
         *     829
         *     1329
         *     1695
         *
         *     # List posts in JSON
         *     $ wp post list --post_type=post --posts_per_page=5 --format=json
         *     [{"ID":1,"post_title":"Hello world!","post_name":"hello-world","post_date":"2015-06-20 09:00:10","post_status":"publish"},{"ID":1178,"post_title":"Markup: HTML Tags and Formatting","post_name":"markup-html-tags-and-formatting","post_date":"2013-01-11 20:22:19","post_status":"draft"}]
         *
         *     # List all pages
         *     $ wp post list --post_type=page --fields=post_title,post_status
         *     +-------------+-------------+
         *     | post_title  | post_status |
         *     +-------------+-------------+
         *     | Sample Page | publish     |
         *     +-------------+-------------+
         *
         *     # List ids of all pages and posts
         *     $ wp post list --post_type=page,post --format=ids
         *     15 25 34 37 198
         *
         *     # List given posts
         *     $ wp post list --post__in=1,3
         *     +----+--------------+-------------+---------------------+-------------+
         *     | ID | post_title   | post_name   | post_date           | post_status |
         *     +----+--------------+-------------+---------------------+-------------+
         *     | 3  | Lorem Ipsum  | lorem-ipsum | 2016-06-01 14:34:36 | publish     |
         *     | 1  | Hello world! | hello-world | 2016-06-01 14:31:12 | publish     |
         *     +----+--------------+-------------+---------------------+-------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Generates some posts.
         *
         * Creates a specified number of new posts with dummy data.
         *
         * ## OPTIONS
         *
         * [--count=<number>]
         * : How many posts to generate?
         * ---
         * default: 100
         * ---
         *
         * [--post_type=<type>]
         * : The type of the generated posts.
         * ---
         * default: post
         * ---
         *
         * [--post_status=<status>]
         * : The status of the generated posts.
         * ---
         * default: publish
         * ---
         *
         * [--post_title=<post_title>]
         * : The post title.
         * ---
         * default:
         * ---
         *
         * [--post_author=<login>]
         * : The author of the generated posts.
         * ---
         * default:
         * ---
         *
         * [--post_date=<yyyy-mm-dd-hh-ii-ss>]
         * : The date of the generated posts. Default: current date
         *
         * [--post_date_gmt=<yyyy-mm-dd-hh-ii-ss>]
         * : The GMT date of the generated posts. Default: value of post_date (or current date if it's not set)
         *
         * [--post_content]
         * : If set, the command reads the post_content from STDIN.
         *
         * [--max_depth=<number>]
         * : For hierarchical post types, generate child posts down to a certain depth.
         * ---
         * default: 1
         * ---
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: progress
         * options:
         *   - progress
         *   - ids
         * ---
         *
         * ## EXAMPLES
         *
         *     # Generate posts.
         *     $ wp post generate --count=10 --post_type=page --post_date=1999-01-04
         *     Generating posts  100% [================================================] 0:01 / 0:04
         *
         *     # Generate posts with fetched content.
         *     $ curl -N http://loripsum.net/api/5 | wp post generate --post_content --count=10
         *       % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
         *                                      Dload  Upload   Total   Spent    Left  Speed
         *     100  2509  100  2509    0     0    616      0  0:00:04  0:00:04 --:--:--   616
         *     Generating posts  100% [================================================] 0:01 / 0:04
         *
         *     # Add meta to every generated posts.
         *     $ wp post generate --format=ids | xargs -d ' ' -I % wp post meta add % foo bar
         *     Success: Added custom field.
         *     Success: Added custom field.
         *     Success: Added custom field.
         */
        public function generate($args, $assoc_args)
        {
        }
        private function maybe_make_child()
        {
        }
        private function maybe_reset_depth()
        {
        }
        /**
         * Read post content from file or STDIN
         *
         * @param string $arg Supplied argument
         * @return string
         */
        private function read_from_file_or_stdin($arg)
        {
        }
        /**
         * Resolves post_category arg into an array of category ids.
         *
         * @param string $arg Supplied argument.
         * @return array
         */
        private function get_category_ids($arg)
        {
        }
        /**
         * Get post metadata.
         *
         * @param $post_id ID of the post.
         *
         * @return array
         */
        private function get_metadata($post_id)
        {
        }
        /**
         * Get Categories of a post.
         *
         * @param $post_id ID of the post.
         *
         * @return array
         */
        private function get_category($post_id)
        {
        }
        /**
         * Get Tags of a post.
         *
         * @param $post_id ID of the post.
         *
         * @return array
         */
        private function get_tags($post_id)
        {
        }
        /**
         * Verifies whether a post exists.
         *
         * Displays a success message if the post does exist.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the post to check.
         *
         * ## EXAMPLES
         *
         *     # The post exists.
         *     $ wp post exists 1
         *     Success: Post with ID 1337 exists.
         *     $ echo $?
         *     0
         *
         *     # The post does not exist.
         *     $ wp post exists 10000
         *     $ echo $?
         *     1
         */
        public function exists($args)
        {
        }
    }
    /**
     * Adds, updates, deletes, and lists post custom fields.
     *
     * ## EXAMPLES
     *
     *     # Set post meta
     *     $ wp post meta set 123 _wp_page_template about.php
     *     Success: Updated custom field '_wp_page_template'.
     *
     *     # Get post meta
     *     $ wp post meta get 123 _wp_page_template
     *     about.php
     *
     *     # Update post meta
     *     $ wp post meta update 123 _wp_page_template contact.php
     *     Success: Updated custom field '_wp_page_template'.
     *
     *     # Delete post meta
     *     $ wp post meta delete 123 _wp_page_template
     *     Success: Deleted custom field.
     */
    class Post_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'post';
        /**
         * Check that the post ID exists
         *
         * @param int
         */
        protected function check_object_id($object_id)
        {
        }
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = \false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Base class for WP-CLI commands that deal with terms
     *
     * @package wp-cli
     */
    abstract class CommandWithTerms extends \WP_CLI_Command
    {
        /**
         * @var string $object_type WordPress' expected name for the object.
         */
        protected $obj_type;
        /**
         * @var string $object_id WordPress' object id.
         */
        protected $obj_id;
        /**
         * @var array $obj_fields Default fields to display for each object.
         */
        protected $obj_fields = ['term_id', 'name', 'slug', 'taxonomy'];
        /**
         * List all terms associated with an object.
         *
         * <id>
         * : ID for the object.
         *
         * <taxonomy>...
         * : One or more taxonomies to list.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each term.
         *
         * [--fields=<fields>]
         * : Limit the output to specific row fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         *   - count
         *   - ids
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each term:
         *
         * * term_id
         * * name
         * * slug
         * * taxonomy
         *
         * These fields are optionally available:
         *
         * * term_taxonomy_id
         * * description
         * * term_group
         * * parent
         * * count
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Remove a term from an object.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the object.
         *
         * <taxonomy>
         * : The name of the term's taxonomy.
         *
         * [<term>...]
         * : The name of the term or terms to be removed from the object.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * options:
         *   - slug
         *   - id
         * ---
         *
         * [--all]
         * : Remove all terms from the object.
         */
        public function remove($args, $assoc_args)
        {
        }
        /**
         * Add a term to an object.
         *
         * Append the term to the existing set of terms on the object.
         *
         * <id>
         * : The ID of the object.
         *
         * <taxonomy>
         * : The name of the taxonomy type to be added.
         *
         * <term>...
         * : The slug of the term or terms to be added.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * options:
         *   - slug
         *   - id
         * ---
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Set object terms.
         *
         * Replaces existing terms on the object.
         *
         * <id>
         * : The ID of the object.
         *
         * <taxonomy>
         * : The name of the taxonomy type to be updated.
         *
         * <term>...
         * : The slug of the term or terms to be updated.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * options:
         *   - slug
         *   - id
         * ---
         */
        public function set($args, $assoc_args)
        {
        }
        /**
         * Check if taxonomy exists
         *
         * @param $taxonomy
         */
        protected function taxonomy_exists($taxonomy)
        {
        }
        /**
         * Prepare terms if `--by=<field>` flag is used
         *
         * @param array $terms
         * @param string $field
         * @param string $taxonomy
         */
        protected function prepare_terms($field, $terms, $taxonomy)
        {
        }
        /**
         * Set obj_id Class variable
         *
         * @param string $obj_id
         */
        protected function set_obj_id($obj_id)
        {
        }
        /**
         * Get obj_id Class variable
         *
         * @return string
         */
        protected function get_obj_id()
        {
        }
        /**
         * Get obj_type Class variable
         *
         * @return string $obj_type
         */
        protected function get_object_type()
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         *
         * @return WP_CLI\Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
    }
}
namespace {
    /**
     * Adds, updates, removes, and lists post terms.
     *
     * ## EXAMPLES
     *
     *     # Set post terms
     *     $ wp post term set 123 test category
     *     Success: Set terms.
     */
    class Post_Term_Command extends \WP_CLI\CommandWithTerms
    {
        protected $obj_type = 'post';
        public function __construct()
        {
        }
        protected function get_object_type()
        {
        }
    }
    /**
     * Retrieves details on the site's registered post types.
     *
     * Get information on WordPress' built-in and the site's [custom post types](https://developer.wordpress.org/plugins/post-types/).
     *
     * ## EXAMPLES
     *
     *     # Get details about a post type
     *     $ wp post-type get page --fields=name,label,hierarchical --format=json
     *     {"name":"page","label":"Pages","hierarchical":true}
     *
     *     # List post types with 'post' capability type
     *     $ wp post-type list --capability_type=post --fields=name,public
     *     +---------------+--------+
     *     | name          | public |
     *     +---------------+--------+
     *     | post          | 1      |
     *     | attachment    | 1      |
     *     | revision      |        |
     *     | nav_menu_item |        |
     *     +---------------+--------+
     *
     * @package wp-cli
     */
    class Post_Type_Command extends \WP_CLI_Command
    {
        private $fields = array('name', 'label', 'description', 'hierarchical', 'public', 'capability_type');
        /**
         * Gets the post counts for each supplied post type.
         *
         * @param array $post_types Post types to fetch counts for.
         * @return array Associative array of post counts keyed by post type.
         */
        protected function get_counts($post_types)
        {
        }
        /**
         * Lists registered post types.
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : Filter by one or more fields (see get_post_types() first parameter for a list of available fields).
         *
         * [--field=<field>]
         * : Prints the value of a single field for each post type.
         *
         * [--fields=<fields>]
         * : Limit the output to specific post type fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each post type:
         *
         * * name
         * * label
         * * description
         * * hierarchical
         * * public
         * * capability_type
         *
         * These fields are optionally available:
         *
         * * count
         *
         * ## EXAMPLES
         *
         *     # List registered post types
         *     $ wp post-type list --format=csv
         *     name,label,description,hierarchical,public,capability_type
         *     post,Posts,,,1,post
         *     page,Pages,,1,1,page
         *     attachment,Media,,,1,post
         *     revision,Revisions,,,,post
         *     nav_menu_item,"Navigation Menu Items",,,,post
         *
         *     # List post types with 'post' capability type
         *     $ wp post-type list --capability_type=post --fields=name,public
         *     +---------------+--------+
         *     | name          | public |
         *     +---------------+--------+
         *     | post          | 1      |
         *     | attachment    | 1      |
         *     | revision      |        |
         *     | nav_menu_item |        |
         *     +---------------+--------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets details about a registered post type.
         *
         * ## OPTIONS
         *
         * <post-type>
         * : Post type slug
         *
         * [--field=<field>]
         * : Instead of returning the whole taxonomy, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for the specified post type:
         *
         * * name
         * * label
         * * description
         * * hierarchical
         * * public
         * * capability_type
         * * labels
         * * cap
         * * supports
         *
         * These fields are optionally available:
         *
         * * count
         *
         * ## EXAMPLES
         *
         *     # Get details about the 'page' post type.
         *     $ wp post-type get page --fields=name,label,hierarchical --format=json
         *     {"name":"page","label":"Pages","hierarchical":true}
         */
        public function get($args, $assoc_args)
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Creates, deletes, empties, moderates, and lists one or more sites on a multisite installation.
     *
     * ## EXAMPLES
     *
     *     # Create site
     *     $ wp site create --slug=example
     *     Success: Site 3 created: www.example.com/example/
     *
     *     # Output a simple list of site URLs
     *     $ wp site list --field=url
     *     http://www.example.com/
     *     http://www.example.com/subdir/
     *
     *     # Delete site
     *     $ wp site delete 123
     *     Are you sure you want to delete the 'http://www.example.com/example' site? [y/n] y
     *     Success: The site at 'http://www.example.com/example' was deleted.
     *
     * @package wp-cli
     */
    class Site_Command extends \WP_CLI\CommandWithDBObject
    {
        protected $obj_type = 'site';
        protected $obj_id_key = 'blog_id';
        public function __construct()
        {
        }
        /**
         * Delete comments.
         */
        private function empty_comments()
        {
        }
        /**
         * Delete all posts.
         */
        private function empty_posts()
        {
        }
        /**
         * Delete terms, taxonomies, and tax relationships.
         */
        private function empty_taxonomies()
        {
        }
        /**
         * Delete all links, link_category terms, and related cache.
         */
        private function empty_links()
        {
        }
        /**
         * Insert default terms.
         */
        private function insert_default_terms()
        {
        }
        /**
         * Reset option values to default.
         */
        private function reset_options()
        {
        }
        /**
         * Empties a site of its content (posts, comments, terms, and meta).
         *
         * Truncates posts, comments, and terms tables to empty a site of its
         * content. Doesn't affect site configuration (options) or users.
         *
         * If running a persistent object cache, make sure to flush the cache
         * after emptying the site, as the cache values will be invalid otherwise.
         *
         * To also empty custom database tables, you'll need to hook into command
         * execution:
         *
         * ```
         * WP_CLI::add_hook( 'after_invoke:site empty', function(){
         *     global $wpdb;
         *     foreach( array( 'p2p', 'p2pmeta' ) as $table ) {
         *         $table = $wpdb->$table;
         *         $wpdb->query( "TRUNCATE $table" );
         *     }
         * });
         * ```
         *
         * ## OPTIONS
         *
         * [--uploads]
         * : Also delete *all* files in the site's uploads directory.
         *
         * [--yes]
         * : Proceed to empty the site without a confirmation prompt.
         *
         * ## EXAMPLES
         *
         *     $ wp site empty
         *     Are you sure you want to empty the site at http://www.example.com of all posts, links, comments, and terms? [y/n] y
         *     Success: The site at 'http://www.example.com' was emptied.
         *
         * @subcommand empty
         */
        public function empty_($args, $assoc_args)
        {
        }
        /**
         * Deletes a site in a multisite installation.
         *
         * ## OPTIONS
         *
         * [<site-id>]
         * : The id of the site to delete. If not provided, you must set the --slug parameter.
         *
         * [--slug=<slug>]
         * : Path of the blog to be deleted. Subdomain on subdomain installs, directory on subdirectory installs.
         *
         * [--yes]
         * : Answer yes to the confirmation message.
         *
         * [--keep-tables]
         * : Delete the blog from the list, but don't drop it's tables.
         *
         * ## EXAMPLES
         *
         *     $ wp site delete 123
         *     Are you sure you want to delete the http://www.example.com/example site? [y/n] y
         *     Success: The site at 'http://www.example.com/example' was deleted.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Creates a site in a multisite installation.
         *
         * ## OPTIONS
         *
         * --slug=<slug>
         * : Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs.
         *
         * [--title=<title>]
         * : Title of the new site. Default: prettified slug.
         *
         * [--email=<email>]
         * : Email for Admin user. User will be created if none exists. Assignement to Super Admin if not included.
         *
         * [--network_id=<network-id>]
         * : Network to associate new site with. Defaults to current network (typically 1).
         *
         * [--private]
         * : If set, the new site will be non-public (not indexed)
         *
         * [--porcelain]
         * : If set, only the site id will be output on success.
         *
         * ## EXAMPLES
         *
         *     $ wp site create --slug=example
         *     Success: Site 3 created: http://www.example.com/example/
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Gets network data for a given id.
         *
         * @param int     $network_id
         * @return bool|array False if no network found with given id, array otherwise
         */
        private function get_network($network_id)
        {
        }
        /**
         * Lists all sites in a multisite installation.
         *
         * ## OPTIONS
         *
         * [--network=<id>]
         * : The network to which the sites belong.
         *
         * [--<field>=<value>]
         * : Filter by one or more fields (see "Available Fields" section). However,
         * 'url' isn't an available filter, because it's created from domain + path.
         *
         * [--site__in=<value>]
         * : Only list the sites with these blog_id values (comma-separated).
         *
         * [--field=<field>]
         * : Prints the value of a single field for each site.
         *
         * [--fields=<fields>]
         * : Comma-separated list of fields to show.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - count
         *   - ids
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each site:
         *
         * * blog_id
         * * url
         * * last_updated
         * * registered
         *
         * These fields are optionally available:
         *
         * * site_id
         * * domain
         * * path
         * * public
         * * archived
         * * mature
         * * spam
         * * deleted
         * * lang_id
         *
         * ## EXAMPLES
         *
         *     # Output a simple list of site URLs
         *     $ wp site list --field=url
         *     http://www.example.com/
         *     http://www.example.com/subdir/
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Archives one or more sites.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to archive.
         *
         * ## EXAMPLES
         *
         *     $ wp site archive 123
         *     Success: Site 123 archived.
         */
        public function archive($args)
        {
        }
        /**
         * Unarchives one or more sites.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to unarchive.
         *
         * ## EXAMPLES
         *
         *     $ wp site unarchive 123
         *     Success: Site 123 unarchived.
         */
        public function unarchive($args)
        {
        }
        /**
         * Activates one or more sites.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to activate.
         *
         * ## EXAMPLES
         *
         *     $ wp site activate 123
         *     Success: Site 123 activated.
         */
        public function activate($args)
        {
        }
        /**
         * Deactivates one or more sites.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to deactivate.
         *
         * ## EXAMPLES
         *
         *     $ wp site deactivate 123
         *     Success: Site 123 deactivated.
         */
        public function deactivate($args)
        {
        }
        /**
         * Marks one or more sites as spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to be marked as spam.
         *
         * ## EXAMPLES
         *
         *     $ wp site spam 123
         *     Success: Site 123 marked as spam.
         */
        public function spam($args)
        {
        }
        /**
         * Removes one or more sites from spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to remove from spam.
         *
         * ## EXAMPLES
         *
         *     $ wp site unspam 123
         *     Success: Site 123 removed from spam.
         *
         * @subcommand unspam
         */
        public function unspam($args)
        {
        }
        /**
         * Sets one or more sites as mature.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to set as mature.
         *
         * ## EXAMPLES
         *
         *     $ wp site mature 123
         *     Success: Site 123 marked as mature.
         */
        public function mature($args)
        {
        }
        /**
         * Sets one or more sites as immature.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to set as unmature.
         *
         * ## EXAMPLES
         *
         *     $ wp site general 123
         *     Success: Site 123 marked as unmature.
         */
        public function unmature($args)
        {
        }
        /**
         * Sets one or more sites as public.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to set as public.
         *
         * ## EXAMPLES
         *
         *     $ wp site public 123
         *     Success: Site 123 marked as public.
         *
         * @subcommand public
         */
        public function set_public($args)
        {
        }
        /**
         * Sets one or more sites as private.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of sites to set as private.
         *
         * ## EXAMPLES
         *
         *     $ wp site private 123
         *     Success: Site 123 marked as private.
         *
         * @subcommand private
         */
        public function set_private($args)
        {
        }
        private function update_site_status($ids, $pref, $value)
        {
        }
    }
    /**
     * Adds, updates, deletes, and lists site custom fields.
     *
     * ## EXAMPLES
     *
     *     # Set site meta
     *     $ wp site meta set 123 bio "Mary is a WordPress developer."
     *     Success: Updated custom field 'bio'.
     *
     *     # Get site meta
     *     $ wp site meta get 123 bio
     *     Mary is a WordPress developer.
     *
     *     # Update site meta
     *     $ wp site meta update 123 bio "Mary is an awesome WordPress developer."
     *     Success: Updated custom field 'bio'.
     *
     *     # Delete site meta
     *     $ wp site meta delete 123 bio
     *     Success: Deleted custom field.
     */
    class Site_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'blog';
        /**
         * Check that the site ID exists
         *
         * @param int
         */
        protected function check_object_id($object_id)
        {
        }
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = \false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
    }
    /**
     * Adds, updates, deletes, and lists site options in a multisite installation.
     *
     * ## EXAMPLES
     *
     *     # Get site registration
     *     $ wp site option get registration
     *     none
     *
     *     # Add site option
     *     $ wp site option add my_option foobar
     *     Success: Added 'my_option' site option.
     *
     *     # Update site option
     *     $ wp site option update my_option '{"foo": "bar"}' --format=json
     *     Success: Updated 'my_option' site option.
     *
     *     # Delete site option
     *     $ wp site option delete my_option
     *     Success: Deleted 'my_option' site option.
     */
    class Site_Option_Command extends \WP_CLI_Command
    {
        /**
         * Gets a site option.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the site option.
         *
         * [--format=<format>]
         * : Get value in a particular format.
         * ---
         * default: var_export
         * options:
         *   - var_export
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get site upload filetypes
         *     $ wp site option get upload_filetypes
         *     jpg jpeg png gif mov avi mpg
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Adds a site option.
         *
         * ## OPTIONS
         *
         * <key>
         * : The name of the site option to add.
         *
         * [<value>]
         * : The value of the site option to add. If ommited, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Create a site option by reading a JSON file
         *     $ wp site option add my_option --format=json < config.json
         *     Success: Added 'my_option' site option.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Lists site options.
         *
         * ## OPTIONS
         *
         * [--search=<pattern>]
         * : Use wildcards ( * and ? ) to match option name.
         *
         * [--site_id=<id>]
         * : Limit options to those of a particular site id.
         *
         * [--field=<field>]
         * : Prints the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : The serialization format for the value. total_bytes displays the total size of matching options in bytes.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - count
         *   - yaml
         *   - total_bytes
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * This field will be displayed by default for each matching option:
         *
         * * meta_key
         * * meta_value
         *
         * These fields are optionally available:
         *
         * * meta_id
         * * site_id
         * * size_bytes
         *
         * ## EXAMPLES
         *
         *     # List all site options begining with "i2f_"
         *     $ wp site option list --search="i2f_*"
         *     +-------------+--------------+
         *     | meta_key    | meta_value   |
         *     +-------------+--------------+
         *     | i2f_version | 0.1.0        |
         *     +-------------+--------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Updates a site option.
         *
         * ## OPTIONS
         *
         * <key>
         * : The name of the site option to update.
         *
         * [<value>]
         * : The new value. If ommited, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Update a site option by reading from a file
         *     $ wp site option update my_option < value.txt
         *     Success: Updated 'my_option' site option.
         *
         * @alias set
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Deletes a site option.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the site option.
         *
         * ## EXAMPLES
         *
         *     $ wp site option delete my_option
         *     Success: Deleted 'my_option' site option.
         */
        public function delete($args)
        {
        }
        /**
         * Gets a nested value from an option.
         *
         * ## OPTIONS
         *
         * <key>
         * : The option name.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to pluck.
         *
         * [--format=<format>]
         * : The output format of the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         *   - yaml
         */
        public function pluck($args, $assoc_args)
        {
        }
        /**
         * Updates a nested value in an option.
         *
         * ## OPTIONS
         *
         * <action>
         * : Patch action to perform.
         * ---
         * options:
         *   - insert
         *   - update
         *   - delete
         * ---
         *
         * <key>
         * : The option name.
         *
         * <key-path>...
         * : The name(s) of the keys within the value to locate the value to patch.
         *
         * [<value>]
         * : The new value. If omitted, the value is read from STDIN.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         */
        public function patch($args, $assoc_args)
        {
        }
        private static function esc_like($old)
        {
        }
    }
    /**
     * Retrieves information about registered taxonomies.
     *
     * See references for [built-in taxonomies](https://developer.wordpress.org/themes/basics/categories-tags-custom-taxonomies/) and [custom taxonomies](https://developer.wordpress.org/plugins/taxonomies/working-with-custom-taxonomies/).
     *
     * ## EXAMPLES
     *
     *     # List all taxonomies with 'post' object type.
     *     $ wp taxonomy list --object_type=post --fields=name,public
     *     +-------------+--------+
     *     | name        | public |
     *     +-------------+--------+
     *     | category    | 1      |
     *     | post_tag    | 1      |
     *     | post_format | 1      |
     *     +-------------+--------+
     *
     *     # Get capabilities of 'post_tag' taxonomy.
     *     $ wp taxonomy get post_tag --field=cap
     *     {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}
     *
     * @package wp-cli
     */
    class Taxonomy_Command extends \WP_CLI_Command
    {
        private $fields = array('name', 'label', 'description', 'object_type', 'show_tagcloud', 'hierarchical', 'public');
        public function __construct()
        {
        }
        /**
         * Gets the term counts for each supplied taxonomy.
         *
         * @param array $taxonomies Taxonomies to fetch counts for.
         * @return array Associative array of term counts keyed by taxonomy.
         */
        protected function get_counts($taxonomies)
        {
        }
        /**
         * Lists registered taxonomies.
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : Filter by one or more fields (see get_taxonomies() first parameter for a list of available fields).
         *
         * [--field=<field>]
         * : Prints the value of a single field for each taxonomy.
         *
         * [--fields=<fields>]
         * : Limit the output to specific taxonomy fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each term:
         *
         * * name
         * * label
         * * description
         * * object_type
         * * show_tagcloud
         * * hierarchical
         * * public
         *
         * These fields are optionally available:
         *
         * * count
         *
         * ## EXAMPLES
         *
         *     # List all taxonomies.
         *     $ wp taxonomy list --format=csv
         *     name,label,description,object_type,show_tagcloud,hierarchical,public
         *     category,Categories,,post,1,1,1
         *     post_tag,Tags,,post,1,,1
         *     nav_menu,"Navigation Menus",,nav_menu_item,,,
         *     link_category,"Link Categories",,link,1,,
         *     post_format,Format,,post,,,1
         *
         *     # List all taxonomies with 'post' object type.
         *     $ wp taxonomy list --object_type=post --fields=name,public
         *     +-------------+--------+
         *     | name        | public |
         *     +-------------+--------+
         *     | category    | 1      |
         *     | post_tag    | 1      |
         *     | post_format | 1      |
         *     +-------------+--------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets details about a registered taxonomy.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : Taxonomy slug.
         *
         * [--field=<field>]
         * : Instead of returning the whole taxonomy, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for the specified taxonomy:
         *
         * * name
         * * label
         * * description
         * * object_type
         * * show_tagcloud
         * * hierarchical
         * * public
         * * labels
         * * cap
         *
         * These fields are optionally available:
         *
         * * count
         *
         * ## EXAMPLES
         *
         *     # Get details of `category` taxonomy.
         *     $ wp taxonomy get category --fields=name,label,object_type
         *     +-------------+------------+
         *     | Field       | Value      |
         *     +-------------+------------+
         *     | name        | category   |
         *     | label       | Categories |
         *     | object_type | ["post"]   |
         *     +-------------+------------+
         *
         *     # Get capabilities of 'post_tag' taxonomy.
         *     $ wp taxonomy get post_tag --field=cap
         *     {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}
         */
        public function get($args, $assoc_args)
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Manages taxonomy terms and term meta, with create, delete, and list commands.
     *
     * See reference for [taxonomies and their terms](https://codex.wordpress.org/Taxonomies).
     *
     * ## EXAMPLES
     *
     *     # Create a new term.
     *     $ wp term create category Apple --description="A type of fruit"
     *     Success: Created category 199.
     *
     *     # Get details about a term.
     *     $ wp term get category 199 --format=json --fields=term_id,name,slug,count
     *     {"term_id":199,"name":"Apple","slug":"apple","count":1}
     *
     *     # Update an existing term.
     *     $ wp term update category 15 --name=Apple
     *     Success: Term updated.
     *
     *     # Get the term's URL.
     *     $ wp term list post_tag --include=123 --field=url
     *     http://example.com/tag/tips-and-tricks
     *
     *     # Delete post category
     *     $ wp term delete category 15
     *     Success: Deleted category 15.
     *
     *     # Recount posts assigned to each categories and tags
     *     $ wp term recount category post_tag
     *     Success: Updated category term count
     *     Success: Updated post_tag term count
     *
     * @package wp-cli
     */
    class Term_Command extends \WP_CLI_Command
    {
        private $fields = ['term_id', 'term_taxonomy_id', 'name', 'slug', 'description', 'parent', 'count'];
        /**
         * Lists terms in a taxonomy.
         *
         * ## OPTIONS
         *
         * <taxonomy>...
         * : List terms of one or more taxonomies
         *
         * [--<field>=<value>]
         * : Filter by one or more fields (see get_terms() $args parameter for a list of fields).
         *
         * [--field=<field>]
         * : Prints the value of a single field for each term.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each term:
         *
         * * term_id
         * * term_taxonomy_id
         * * name
         * * slug
         * * description
         * * parent
         * * count
         *
         * These fields are optionally available:
         *
         * * url
         *
         * ## EXAMPLES
         *
         *     # List post categories
         *     $ wp term list category --format=csv
         *     term_id,term_taxonomy_id,name,slug,description,parent,count
         *     2,2,aciform,aciform,,0,1
         *     3,3,antiquarianism,antiquarianism,,0,1
         *     4,4,arrangement,arrangement,,0,1
         *     5,5,asmodeus,asmodeus,,0,1
         *
         *     # List post tags
         *     $ wp term list post_tag --fields=name,slug
         *     +-----------+-------------+
         *     | name      | slug        |
         *     +-----------+-------------+
         *     | 8BIT      | 8bit        |
         *     | alignment | alignment-2 |
         *     | Articles  | articles    |
         *     | aside     | aside       |
         *     +-----------+-------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Creates a new term.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : Taxonomy for the new term.
         *
         * <term>
         * : A name for the new term.
         *
         * [--slug=<slug>]
         * : A unique slug for the new term. Defaults to sanitized version of name.
         *
         * [--description=<description>]
         * : A description for the new term.
         *
         * [--parent=<term-id>]
         * : A parent for the new term.
         *
         * [--porcelain]
         * : Output just the new term id.
         *
         * ## EXAMPLES
         *
         *     # Create a new category "Apple" with a description.
         *     $ wp term create category Apple --description="A type of fruit"
         *     Success: Created category 199.
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Gets details about a term.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : Taxonomy of the term to get
         *
         * <term>
         * : ID or slug of the term to get
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * default: id
         * options:
         *   - slug
         *   - id
         * ---
         *
         * [--field=<field>]
         * : Instead of returning the whole term, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get details about a category with id 199.
         *     $ wp term get category 199 --format=json
         *     {"term_id":199,"name":"Apple","slug":"apple","term_group":0,"term_taxonomy_id":199,"taxonomy":"category","description":"A type of fruit","parent":0,"count":0,"filter":"raw"}
         *
         *     # Get details about a category with slug apple.
         *     $ wp term get category apple --by=slug --format=json
         *     {"term_id":199,"name":"Apple","slug":"apple","term_group":0,"term_taxonomy_id":199,"taxonomy":"category","description":"A type of fruit","parent":0,"count":0,"filter":"raw"}
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Updates an existing term.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : Taxonomy of the term to update.
         *
         * <term>
         * : ID or slug for the term to update.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * default: id
         * options:
         *   - slug
         *   - id
         * ---
         *
         * [--name=<name>]
         * : A new name for the term.
         *
         * [--slug=<slug>]
         * : A new slug for the term.
         *
         * [--description=<description>]
         * : A new description for the term.
         *
         * [--parent=<term-id>]
         * : A new parent for the term.
         *
         * ## EXAMPLES
         *
         *     # Change category with id 15 to use the name "Apple"
         *     $ wp term update category 15 --name=Apple
         *     Success: Term updated.
         *
         *     # Change category with slug apple to use the name "Apple"
         *     $ wp term update category apple --by=slug --name=Apple
         *     Success: Term updated.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Deletes an existing term.
         *
         * Errors if the term doesn't exist, or there was a problem in deleting it.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : Taxonomy of the term to delete.
         *
         * <term>...
         * : One or more IDs or slugs of terms to delete.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * default: id
         * options:
         *   - slug
         *   - id
         * ---
         *
         * ## EXAMPLES
         *
         *     # Delete post category by id
         *     $ wp term delete category 15
         *     Deleted category 15.
         *     Success: Deleted 1 of 1 terms.
         *
         *     # Delete post category by slug
         *     $ wp term delete category apple --by=slug
         *     Deleted category 15.
         *     Success: Deleted 1 of 1 terms.
         *
         *     # Delete all post tags
         *     $ wp term list post_tag --field=term_id | xargs wp term delete post_tag
         *     Deleted post_tag 159.
         *     Deleted post_tag 160.
         *     Deleted post_tag 161.
         *     Success: Deleted 3 of 3 terms.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Generates some terms.
         *
         * Creates a specified number of new terms with dummy data.
         *
         * ## OPTIONS
         *
         * <taxonomy>
         * : The taxonomy for the generated terms.
         *
         * [--count=<number>]
         * : How many terms to generate?
         * ---
         * default: 100
         * ---
         *
         * [--max_depth=<number>]
         * : Generate child terms down to a certain depth.
         * ---
         * default: 1
         * ---
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: progress
         * options:
         *   - progress
         *   - ids
         * ---
         *
         * ## EXAMPLES
         *
         *     # Generate post categories.
         *     $ wp term generate category --count=10
         *     Generating terms  100% [=========] 0:02 / 0:02
         *
         *     # Add meta to every generated term.
         *     $ wp term generate category --format=ids --count=3 | xargs -d ' ' -I % wp term meta add % foo bar
         *     Success: Added custom field.
         *     Success: Added custom field.
         *     Success: Added custom field.
         */
        public function generate($args, $assoc_args)
        {
        }
        /**
         * Recalculates number of posts assigned to each term.
         *
         * In instances where manual updates are made to the terms assigned to
         * posts in the database, the number of posts associated with a term
         * can become out-of-sync with the actual number of posts.
         *
         * This command runs wp_update_term_count() on the taxonomy's terms
         * to bring the count back to the correct value.
         *
         * ## OPTIONS
         *
         * <taxonomy>...
         * : One or more taxonomies to recalculate.
         *
         * ## EXAMPLES
         *
         *     # Recount posts assigned to each categories and tags
         *     $ wp term recount category post_tag
         *     Success: Updated category term count.
         *     Success: Updated post_tag term count.
         *
         *     # Recount all listed taxonomies
         *     $ wp taxonomy list --field=name | xargs wp term recount
         *     Success: Updated category term count.
         *     Success: Updated post_tag term count.
         *     Success: Updated nav_menu term count.
         *     Success: Updated link_category term count.
         *     Success: Updated post_format term count.
         */
        public function recount($args)
        {
        }
        /**
         * Migrate a term of a taxonomy to another taxonomy.
         *
         * ## OPTIONS
         *
         * <term>
         * : Slug or ID of the term to migrate.
         *
         * [--by=<field>]
         * : Explicitly handle the term value as a slug or id.
         * ---
         * default: id
         * options:
         *   - slug
         *   - id
         * ---
         *
         * [--from=<taxonomy>]
         * : Taxonomy slug of the term to migrate.
         *
         * [--to=<taxonomy>]
         * : Taxonomy slug to migrate to.
         *
         * ## EXAMPLES
         *
         *     # Migrate a category's term (video) to tag taxonomy.
         *     $ wp term migrate 9190 --from=category --to=post_tag
         *     Term '9190' migrated!
         *     Old instance of term '9190' removed from its original taxonomy.
         *     Success: Migrated the term '9190' from taxonomy 'category' to taxonomy 'post_tag' for 1 posts
         */
        public function migrate($args, $assoc_args)
        {
        }
        private function maybe_make_child()
        {
        }
        private function maybe_reset_depth()
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Adds, updates, deletes, and lists term custom fields.
     *
     * ## EXAMPLES
     *
     *     # Set term meta
     *     $ wp term meta set 123 bio "Mary is a WordPress developer."
     *     Success: Updated custom field 'bio'.
     *
     *     # Get term meta
     *     $ wp term meta get 123 bio
     *     Mary is a WordPress developer.
     *
     *     # Update term meta
     *     $ wp term meta update 123 bio "Mary is an awesome WordPress developer."
     *     Success: Updated custom field 'bio'.
     *
     *     # Delete term meta
     *     $ wp term meta delete 123 bio
     *     Success: Deleted custom field.
     */
    class Term_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'term';
        /**
         * Check that the term ID exists
         *
         * @param int
         */
        protected function check_object_id($object_id)
        {
        }
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = \false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
    }
    /**
     * Manages users, along with their roles, capabilities, and meta.
     *
     * See references for [Roles and Capabilities](https://codex.wordpress.org/Roles_and_Capabilities) and [WP User class](https://codex.wordpress.org/Class_Reference/WP_User).
     *
     * ## EXAMPLES
     *
     *     # List user IDs
     *     $ wp user list --field=ID
     *     1
     *
     *     # Create a new user.
     *     $ wp user create bob bob@example.com --role=author
     *     Success: Created user 3.
     *     Password: k9**&I4vNH(&
     *
     *     # Update an existing user.
     *     $ wp user update 123 --display_name=Mary --user_pass=marypass
     *     Success: Updated user 123.
     *
     *     # Delete user 123 and reassign posts to user 567
     *     $ wp user delete 123 --reassign=567
     *     Success: Removed user 123 from http://example.com
     *
     * @package wp-cli
     */
    class User_Command extends \WP_CLI\CommandWithDBObject
    {
        protected $obj_type = 'user';
        protected $obj_fields = ['ID', 'user_login', 'display_name', 'user_email', 'user_registered', 'roles'];
        private $cap_fields = ['name'];
        public function __construct()
        {
        }
        /**
         * Lists users.
         *
         * Display WordPress users based on all arguments supported by
         * [WP_User_Query()](https://developer.wordpress.org/reference/classes/wp_user_query/prepare_query/).
         *
         * ## OPTIONS
         *
         * [--role=<role>]
         * : Only display users with a certain role.
         *
         * [--<field>=<value>]
         * : Control output by one or more arguments of WP_User_Query().
         *
         * [--network]
         * : List all users in the network for multisite.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each user.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each user:
         *
         * * ID
         * * user_login
         * * display_name
         * * user_email
         * * user_registered
         * * roles
         *
         * These fields are optionally available:
         *
         * * user_pass
         * * user_nicename
         * * user_url
         * * user_activation_key
         * * user_status
         * * spam
         * * deleted
         * * caps
         * * cap_key
         * * allcaps
         * * filter
         * * url
         *
         * ## EXAMPLES
         *
         *     # List user IDs
         *     $ wp user list --field=ID
         *     1
         *
         *     # List users with administrator role
         *     $ wp user list --role=administrator --format=csv
         *     ID,user_login,display_name,user_email,user_registered,roles
         *     1,supervisor,supervisor,supervisor@gmail.com,"2016-06-03 04:37:00",administrator
         *
         *     # List users with only given fields
         *     $ wp user list --fields=display_name,user_email --format=json
         *     [{"display_name":"supervisor","user_email":"supervisor@gmail.com"}]
         *
         *     # List users ordered by the 'last_activity' meta value.
         *     $ wp user list --meta_key=last_activity --orderby=meta_value_num
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets details about a user.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * [--field=<field>]
         * : Instead of returning the whole user, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Get a specific subset of the user's fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get user
         *     $ wp user get 12 --field=login
         *     supervisor
         *
         *     # Get user and export to JSON file
         *     $ wp user get bob --format=json > bob.json
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Deletes one or more users from the current site.
         *
         * On multisite, `wp user delete` only removes the user from the current
         * site. Include `--network` to also remove the user from the database, but
         * make sure to reassign their posts prior to deleting the user.
         *
         * ## OPTIONS
         *
         * <user>...
         * : The user login, user email, or user ID of the user(s) to delete.
         *
         * [--network]
         * : On multisite, delete the user from the entire network.
         *
         * [--reassign=<user-id>]
         * : User ID to reassign the posts to.
         *
         * [--yes]
         * : Answer yes to any confirmation prompts.
         *
         * ## EXAMPLES
         *
         *     # Delete user 123 and reassign posts to user 567
         *     $ wp user delete 123 --reassign=567
         *     Success: Removed user 123 from http://example.com
         *
         *     # Delete all contributors and reassign their posts to user 2
         *     $ wp user delete $(wp user list --role=contributor --field=ID) --reassign=2
         *     Success: Removed user 813 from http://example.com
         *     Success: Removed user 578 from http://example.com
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Creates a new user.
         *
         * ## OPTIONS
         *
         * <user-login>
         * : The login of the user to create.
         *
         * <user-email>
         * : The email address of the user to create.
         *
         * [--role=<role>]
         * : The role of the user to create. Default: default role. Possible values
         * include 'administrator', 'editor', 'author', 'contributor', 'subscriber'.
         *
         * [--user_pass=<password>]
         * : The user password. Default: randomly generated.
         *
         * [--user_registered=<yyyy-mm-dd-hh-ii-ss>]
         * : The date the user registered. Default: current date.
         *
         * [--display_name=<name>]
         * : The display name.
         *
         * [--user_nicename=<nice_name>]
         * : A string that contains a URL-friendly name for the user. The default is the user's username.
         *
         * [--user_url=<url>]
         * : A string containing the user's URL for the user's web site.
         *
         * [--nickname=<nickname>]
         * : The user's nickname, defaults to the user's username.
         *
         * [--first_name=<first_name>]
         * : The user's first name.
         *
         * [--last_name=<last_name>]
         * : The user's last name.
         *
         * [--description=<description>]
         * : A string containing content about the user.
         *
         * [--rich_editing=<rich_editing>]
         * : A string for whether to enable the rich editor or not. False if not empty.
         *
         * [--send-email]
         * : Send an email to the user with their new account details.
         *
         * [--porcelain]
         * : Output just the new user id.
         *
         * ## EXAMPLES
         *
         *     # Create user
         *     $ wp user create bob bob@example.com --role=author
         *     Success: Created user 3.
         *     Password: k9**&I4vNH(&
         *
         *     # Create user without showing password upon success
         *     $ wp user create ann ann@example.com --porcelain
         *     4
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Updates an existing user.
         *
         * ## OPTIONS
         *
         * <user>...
         * : The user login, user email or user ID of the user(s) to update.
         *
         * [--user_pass=<password>]
         * : A string that contains the plain text password for the user.
         *
         * [--user_nicename=<nice_name>]
         * : A string that contains a URL-friendly name for the user. The default is the user's username.
         *
         * [--user_url=<url>]
         * : A string containing the user's URL for the user's web site.
         *
         * [--user_email=<email>]
         * : A string containing the user's email address.
         *
         * [--display_name=<display_name>]
         * : A string that will be shown on the site. Defaults to user's username.
         *
         * [--nickname=<nickname>]
         * : The user's nickname, defaults to the user's username.
         *
         * [--first_name=<first_name>]
         * : The user's first name.
         *
         * [--last_name=<last_name>]
         * : The user's last name.
         *
         * [--description=<description>]
         * : A string containing content about the user.
         *
         * [--rich_editing=<rich_editing>]
         * : A string for whether to enable the rich editor or not. False if not empty.
         *
         * [--user_registered=<yyyy-mm-dd-hh-ii-ss>]
         * : The date the user registered.
         *
         * [--role=<role>]
         * : A string used to set the user's role.
         *
         * --<field>=<value>
         * : One or more fields to update. For accepted fields, see wp_update_user().
         *
         * [--skip-email]
         * : Don't send an email notification to the user.
         *
         * ## EXAMPLES
         *
         *     # Update user
         *     $ wp user update 123 --display_name=Mary --user_pass=marypass
         *     Success: Updated user 123.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Generates some users.
         *
         * Creates a specified number of new users with dummy data.
         *
         * ## OPTIONS
         *
         * [--count=<number>]
         * : How many users to generate?
         * ---
         * default: 100
         * ---
         *
         * [--role=<role>]
         * : The role of the generated users. Default: default role from WP
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: progress
         * options:
         *   - progress
         *   - ids
         * ---
         *
         * ## EXAMPLES
         *
         *     # Add meta to every generated users.
         *     $ wp user generate --format=ids --count=3 | xargs -d ' ' -I % wp user meta add % foo bar
         *     Success: Added custom field.
         *     Success: Added custom field.
         *     Success: Added custom field.
         */
        public function generate($args, $assoc_args)
        {
        }
        /**
         * Sets the user role.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * [<role>]
         * : Make the user have the specified role. If not passed, the default role is
         * used.
         *
         * ## EXAMPLES
         *
         *     $ wp user set-role 12 author
         *     Success: Added johndoe (12) to http://example.com as author.
         *
         * @subcommand set-role
         */
        public function set_role($args, $assoc_args)
        {
        }
        /**
         * Adds a role for a user.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * <role>
         * : Add the specified role to the user.
         *
         * ## EXAMPLES
         *
         *     $ wp user add-role 12 author
         *     Success: Added 'author' role for johndoe (12).
         *
         * @subcommand add-role
         */
        public function add_role($args, $assoc_args)
        {
        }
        /**
         * Removes a user's role.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * [<role>]
         * : A specific role to remove.
         *
         * ## EXAMPLES
         *
         *     $ wp user remove-role 12 author
         *     Success: Removed 'author' role for johndoe (12).
         *
         * @subcommand remove-role
         */
        public function remove_role($args, $assoc_args)
        {
        }
        /**
         * Adds a capability to a user.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * <cap>
         * : The capability to add.
         *
         * ## EXAMPLES
         *
         *     # Add a capability for a user
         *     $ wp user add-cap john create_premium_item
         *     Success: Added 'create_premium_item' capability for john (16).
         *
         *     # Add a capability for a user
         *     $ wp user add-cap 15 edit_product
         *     Success: Added 'edit_product' capability for johndoe (15).
         *
         * @subcommand add-cap
         */
        public function add_cap($args, $assoc_args)
        {
        }
        /**
         * Removes a user's capability.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * <cap>
         * : The capability to be removed.
         *
         * ## EXAMPLES
         *
         *     $ wp user remove-cap 11 publish_newsletters
         *     Success: Removed 'publish_newsletters' cap for supervisor (11).
         *
         *     $ wp user remove-cap 11 publish_posts
         *     Error: The 'publish_posts' cap for supervisor (11) is inherited from a role.
         *
         *     $ wp user remove-cap 11 nonexistent_cap
         *     Error: No such 'nonexistent_cap' cap for supervisor (11).
         *
         * @subcommand remove-cap
         */
        public function remove_cap($args, $assoc_args)
        {
        }
        /**
         * Lists all capabilities for a user.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or login.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: list
         * options:
         *   - list
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp user list-caps 21
         *     edit_product
         *     create_premium_item
         *
         * @subcommand list-caps
         */
        public function list_caps($args, $assoc_args)
        {
        }
        /**
         * Imports users from a CSV file.
         *
         * If the user already exists (matching the email address or login), then
         * the user is updated unless the `--skip-update` flag is used.
         *
         * ## OPTIONS
         *
         * <file>
         * : The local or remote CSV file of users to import. If '-', then reads from STDIN.
         *
         * [--send-email]
         * : Send an email to new users with their account details.
         *
         * [--skip-update]
         * : Don't update users that already exist.
         *
         * ## EXAMPLES
         *
         *     # Import users from local CSV file
         *     $ wp user import-csv /path/to/users.csv
         *     Success: bobjones created
         *     Success: newuser1 created
         *     Success: existinguser created
         *
         *     # Import users from remote CSV file
         *     $ wp user import-csv http://example.com/users.csv
         *
         *     Sample users.csv file:
         *
         *     user_login,user_email,display_name,role
         *     bobjones,bobjones@example.com,Bob Jones,contributor
         *     newuser1,newuser1@example.com,New User,author
         *     existinguser,existinguser@example.com,Existing User,administrator
         *
         * @subcommand import-csv
         */
        public function import_csv($args, $assoc_args)
        {
        }
        /**
         * Resets the password for one or more users.
         *
         * ## OPTIONS
         *
         * <user>...
         * : one or more user logins or IDs.
         *
         * [--skip-email]
         * : Don't send an email notification to the affected user(s).
         *
         * ## EXAMPLES
         *
         *     # Reset the password for two users and send them the change email.
         *     $ wp user reset-password admin editor
         *     Reset password for admin.
         *     Reset password for editor.
         *     Success: Passwords reset for 2 users.
         *
         * @subcommand reset-password
         */
        public function reset_password($args, $assoc_args)
        {
        }
        /**
         * Checks whether the role is valid
         *
         * @param string
         */
        private static function validate_role($role)
        {
        }
        /**
         * Accommodates three different behaviors for wp_new_user_notification()
         * - 4.3.1 and above: expect second argument to be deprecated
         * - 4.3: Second argument was repurposed as $notify
         * - Below 4.3: Send the password in the notification
         *
         * @param string $user_id
         * @param string $password
         */
        public static function wp_new_user_notification($user_id, $password)
        {
        }
        /**
         * Marks one or more users as spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of users to mark as spam.
         *
         * ## EXAMPLES
         *
         *     $ wp user spam 123
         *     User 123 marked as spam.
         *     Success: Spamed 1 of 1 users.
         */
        public function spam($args)
        {
        }
        /**
         * Removes one or more users from spam.
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of users to remove from spam.
         *
         * ## EXAMPLES
         *
         *     $ wp user unspam 123
         *     User 123 removed from spam.
         *     Success: Unspamed 1 of 1 users.
         */
        public function unspam($args)
        {
        }
        /**
         * Common command for updating user data.
         */
        private function update_msuser_status($user_ids, $pref, $value)
        {
        }
        /**
         * Checks if a user's password is valid or not.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email or user ID of the user to check credentials for.
         *
         * <user_pass>
         * : A string that contains the plain text password for the user.
         *
         * [--escape-chars]
         * : Escape password with `wp_slash()` to mimic the same behavior as `wp-login.php`.
         *
         * ## EXAMPLES
         *
         *     # Check whether given credentials are valid; exit status 0 if valid, otherwise 1
         *     $ wp user check-password admin adminpass
         *     $ echo $?
         *     1
         *
         *     # Bash script for checking whether given credentials are valid or not
         *     if ! $(wp user check-password admin adminpass); then
         *      notify-send "Invalid Credentials";
         *     fi
         *
         * @subcommand check-password
         */
        public function check_password($args, $assoc_args)
        {
        }
    }
    /**
     * Adds, updates, deletes, and lists user custom fields.
     *
     * ## EXAMPLES
     *
     *     # Add user meta
     *     $ wp user meta add 123 bio "Mary is an WordPress developer."
     *     Success: Added custom field.
     *
     *     # List user meta
     *     $ wp user meta list 123 --keys=nickname,description,wp_capabilities
     *     +---------+-----------------+--------------------------------+
     *     | user_id | meta_key        | meta_value                     |
     *     +---------+-----------------+--------------------------------+
     *     | 123     | nickname        | supervisor                     |
     *     | 123     | description     | Mary is a WordPress developer. |
     *     | 123     | wp_capabilities | {"administrator":true}         |
     *     +---------+-----------------+--------------------------------+
     *
     *     # Update user meta
     *     $ wp user meta update 123 bio "Mary is an awesome WordPress developer."
     *     Success: Updated custom field 'bio'.
     *
     *     # Delete user meta
     *     $ wp user meta delete 123 bio
     *     Success: Deleted custom field.
     */
    class User_Meta_Command extends \WP_CLI\CommandWithMeta
    {
        protected $meta_type = 'user';
        public function __construct()
        {
        }
        /**
         * Lists all metadata associated with a user.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email, or user ID of the user to get metadata for.
         *
         * [--keys=<keys>]
         * : Limit output to metadata of specific keys.
         *
         * [--fields=<fields>]
         * : Limit the output to specific row fields. Defaults to id,meta_key,meta_value.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * [--orderby=<fields>]
         * : Set orderby which field.
         * ---
         * default: id
         * options:
         *  - id
         *  - meta_key
         *  - meta_value
         * ---
         *
         * [--order=<order>]
         * : Set ascending or descending order.
         * ---
         * default: asc
         * options:
         *  - asc
         *  - desc
         * ---
         *
         * [--unserialize]
         * : Unserialize meta_value output.
         *
         * ## EXAMPLES
         *
         *     # List user meta
         *     $ wp user meta list 123 --keys=nickname,description,wp_capabilities
         *     +---------+-----------------+--------------------------------+
         *     | user_id | meta_key        | meta_value                     |
         *     +---------+-----------------+--------------------------------+
         *     | 123     | nickname        | supervisor                     |
         *     | 123     | description     | Mary is a WordPress developer. |
         *     | 123     | wp_capabilities | {"administrator":true}         |
         *     +---------+-----------------+--------------------------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets meta field value.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email, or user ID of the user to get metadata for.
         *
         * <key>
         * : The metadata key.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get user meta
         *     $ wp user meta get 123 bio
         *     Mary is an WordPress developer.
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Deletes a meta field.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email, or user ID of the user to delete metadata from.
         *
         * <key>
         * : The metadata key.
         *
         * [<value>]
         * : The value to delete. If omitted, all rows with key will deleted.
         *
         * ## EXAMPLES
         *
         *     # Delete user meta
         *     $ wp user meta delete 123 bio
         *     Success: Deleted custom field.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Adds a meta field.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email, or user ID of the user to add metadata for.
         *
         * <key>
         * : The metadata key.
         *
         * <value>
         * : The new metadata value.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Add user meta
         *     $ wp user meta add 123 bio "Mary is an WordPress developer."
         *     Success: Added custom field.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Updates a meta field.
         *
         * ## OPTIONS
         *
         * <user>
         * : The user login, user email, or user ID of the user to update metadata for.
         *
         * <key>
         * : The metadata key.
         *
         * <value>
         * : The new metadata value.
         *
         * [--format=<format>]
         * : The serialization format for the value.
         * ---
         * default: plaintext
         * options:
         *   - plaintext
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Update user meta
         *     $ wp user meta update 123 bio "Mary is an awesome WordPress developer."
         *     Success: Updated custom field 'bio'.
         *
         * @alias set
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Wrapper method for add_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param bool   $unique     Optional, default is false. Whether the
         *                           specified metadata key should be unique for the
         *                           object. If true, and the object already has a
         *                           value for the specified metadata key, no change
         *                           will be made.
         *
         * @return int|false The meta ID on success, false on failure.
         */
        protected function add_metadata($object_id, $meta_key, $meta_value, $unique = \false)
        {
        }
        /**
         * Wrapper method for update_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object the metadata is for.
         * @param string $meta_key   Metadata key to use.
         * @param mixed  $meta_value Metadata value. Must be serializable if
         *                           non-scalar.
         * @param mixed  $prev_value Optional. If specified, only update existing
         *                           metadata entries with the specified value.
         *                           Otherwise, update all entries.
         *
         * @return int|bool Meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        protected function update_metadata($object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Wrapper method for get_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id ID of the object the metadata is for.
         * @param string $meta_key  Optional. Metadata key. If not specified,
         *                          retrieve all metadata for the specified object.
         * @param bool   $single    Optional, default is false. If true, return only
         *                          the first value of the specified meta_key. This
         *                          parameter has no effect if meta_key is not
         *                          specified.
         *
         * @return mixed Single metadata value, or array of values.
         */
        protected function get_metadata($object_id, $meta_key = '', $single = \false)
        {
        }
        /**
         * Wrapper method for delete_metadata that can be overridden in sub classes.
         *
         * @param int    $object_id  ID of the object metadata is for
         * @param string $meta_key   Metadata key
         * @param mixed $meta_value  Optional. Metadata value. Must be serializable
         *                           if non-scalar. If specified, only delete
         *                           metadata entries with this value. Otherwise,
         *                           delete all entries with the specified meta_key.
         *                           Pass `null, `false`, or an empty string to skip
         *                           this check. For backward compatibility, it is
         *                           not possible to pass an empty string to delete
         *                           those entries with an empty string for a value.
         *
         * @return bool True on successful delete, false on failure.
         */
        protected function delete_metadata($object_id, $meta_key, $meta_value = '')
        {
        }
        /**
         * Replaces user_login value with user ID
         * user meta is a special case that also supports user_login
         *
         * @param array
         * @return array
         */
        private function replace_login_with_user_id($args)
        {
        }
    }
    /**
     * Destroys and lists a user's sessions.
     *
     * ## EXAMPLES
     *
     *     # List a user's sessions.
     *     $ wp user session list admin@example.com --format=csv
     *     login_time,expiration_time,ip,ua
     *     "2016-01-01 12:34:56","2016-02-01 12:34:56",127.0.0.1,"Mozilla/5.0..."
     *
     *     # Destroy the most recent session of the given user.
     *     $ wp user session destroy admin
     *     Success: Destroyed session. 3 sessions remaining.
     *
     * @package wp-cli
     */
    class User_Session_Command extends \WP_CLI_Command
    {
        private $fields = ['token', 'login_time', 'expiration_time', 'ip', 'ua'];
        public function __construct()
        {
        }
        /**
         * Destroy a session for the given user.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * [<token>]
         * : The token of the session to destroy. Defaults to the most recently created session.
         *
         * [--all]
         * : Destroy all of the user's sessions.
         *
         * ## EXAMPLES
         *
         *     # Destroy the most recent session of the given user.
         *     $ wp user session destroy admin
         *     Success: Destroyed session. 3 sessions remaining.
         *
         *     # Destroy a specific session of the given user.
         *     $ wp user session destroy admin e073ad8540a9c2...
         *     Success: Destroyed session. 2 sessions remaining.
         *
         *     # Destroy all the sessions of the given user.
         *     $ wp user session destroy admin --all
         *     Success: Destroyed all sessions.
         *
         *     # Destroy all sessions for all users.
         *     $ wp user list --field=ID | xargs -n 1 wp user session destroy --all
         *     Success: Destroyed all sessions.
         *     Success: Destroyed all sessions.
         */
        public function destroy($args, $assoc_args)
        {
        }
        /**
         * List sessions for the given user.
         *
         * Note: The `token` field does not return the actual token, but a hash of
         * it. The real token is not persisted and can only be found in the
         * corresponding cookies on the client side.
         *
         * ## OPTIONS
         *
         * <user>
         * : User ID, user email, or user login.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         *   - count
         *   - ids
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each session:
         *
         * * token
         * * login_time
         * * expiration_time
         * * ip
         * * ua
         *
         * These fields are optionally available:
         *
         * * expiration
         * * login
         *
         * ## EXAMPLES
         *
         *     # List a user's sessions.
         *     $ wp user session list admin@example.com --format=csv
         *     login_time,expiration_time,ip,ua
         *     "2016-01-01 12:34:56","2016-02-01 12:34:56",127.0.0.1,"Mozilla/5.0..."
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        protected function get_all_sessions(\WP_Session_Tokens $manager)
        {
        }
        protected function destroy_session(\WP_Session_Tokens $manager, $token)
        {
        }
        private function get_formatter(&$assoc_args)
        {
        }
    }
    /**
     * Adds, updates, removes, and lists user terms.
     *
     * ## EXAMPLES
     *
     *     # Set user terms
     *     $ wp user term set 123 test category
     *     Success: Set terms.
     */
    class User_Term_Command extends \WP_CLI\CommandWithTerms
    {
        protected $obj_type = 'user';
    }
}
namespace WP_CLI\Entity {
    class NonExistentKeyException extends \OutOfBoundsException
    {
        /** @var RecursiveDataStructureTraverser */
        protected $traverser;
        /**
         * @param RecursiveDataStructureTraverser $traverser
         */
        public function set_traverser($traverser)
        {
        }
        /**
         * @return RecursiveDataStructureTraverser
         */
        public function get_traverser()
        {
        }
    }
    class RecursiveDataStructureTraverser
    {
        /**
         * @var mixed The data to traverse set by reference.
         */
        protected $data;
        /**
         * @var null|string The key the data belongs to in the parent's data.
         */
        protected $key;
        /**
         * @var null|static The parent instance of the traverser.
         */
        protected $parent;
        /**
         * RecursiveDataStructureTraverser constructor.
         *
         * @param mixed $data The data to read/manipulate by reference.
         * @param string|int $key The key/property the data belongs to.
         * @param static $parent
         */
        public function __construct(&$data, $key = null, $parent = null)
        {
        }
        /**
         * Get the nested value at the given key path.
         *
         * @param string|int|array $key_path
         *
         * @return static
         */
        public function get($key_path)
        {
        }
        /**
         * Get the current data.
         *
         * @return mixed
         */
        public function value()
        {
        }
        /**
         * Update a nested value at the given key path.
         *
         * @param string|int|array $key_path
         * @param mixed $value
         */
        public function update($key_path, $value)
        {
        }
        /**
         * Update the current data with the given value.
         *
         * This will mutate the variable which was passed into the constructor
         * as the data is set and traversed by reference.
         *
         * @param mixed $value
         */
        public function set_value($value)
        {
        }
        /**
         * Unset the value at the given key path.
         *
         * @param $key_path
         */
        public function delete($key_path)
        {
        }
        /**
         * Define a nested value while creating keys if they do not exist.
         *
         * @param array $key_path
         * @param mixed $value
         */
        public function insert($key_path, $value)
        {
        }
        /**
         * Delete the key on the parent's data that references this data.
         */
        public function unset_on_parent()
        {
        }
        /**
         * Delete the given key from the data.
         *
         * @param $key
         */
        public function delete_by_key($key)
        {
        }
        /**
         * Get an instance of the traverser for the given hierarchical key.
         *
         * @param array $key_path Hierarchical key path within the current data to traverse to.
         *
         * @throws NonExistentKeyException
         *
         * @return static
         */
        public function traverse_to(array $key_path)
        {
        }
        /**
         * Create the key on the current data.
         *
         * @throws UnexpectedValueException
         */
        protected function create_key()
        {
        }
        /**
         * Check if the given key exists on the current data.
         *
         * @param string $key
         *
         * @return bool
         */
        public function exists($key)
        {
        }
    }
    class Utils
    {
        /**
         * Check whether any input is passed to STDIN.
         *
         * @return bool
         */
        public static function has_stdin()
        {
        }
    }
}
namespace WP_CLI\Fetchers {
    /**
     * Fetch a WordPress comment based on one of its attributes.
     */
    class Comment extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = 'Could not find the comment with ID %d.';
        /**
         * Get a comment object by ID
         *
         * @param int $arg
         * @return object|false
         */
        public function get($arg)
        {
        }
    }
    /**
     * Fetch a WordPress post based on one of its attributes.
     */
    class Post extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = 'Could not find the post with ID %d.';
        /**
         * Get a post object by ID
         *
         * @param int $arg
         * @return WP_Post|false
         */
        public function get($arg)
        {
        }
    }
    /**
     * Fetch a WordPress site based on one of its attributes.
     */
    class Site extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = 'Could not find the site with ID %d.';
        /**
         * Get a site object by ID
         *
         * @param int $site_id
         * @return object|false
         */
        public function get($site_id)
        {
        }
        /**
         * Get site (blog) data for a given id.
         *
         * @param int     $site_id
         * @return bool|array False if no site found with given id, array otherwise
         */
        private function get_site($site_id)
        {
        }
    }
    /**
     * Fetch a WordPress user based on one of its attributes.
     */
    class User extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = "Invalid user ID, email or login: '%s'";
        /**
         * Get a user object by one of its identifying attributes
         *
         * @param mixed $id_email_or_login
         * @return WP_User|false
         */
        public function get($id_email_or_login)
        {
        }
    }
}
namespace {
    class EvalFile_Command extends \WP_CLI_Command
    {
        /**
         * Regular expression pattern to match the shell shebang.
         *
         * @var string
         */
        const SHEBANG_PATTERN = '/^(#!.*)$/m';
        /**
         * Regular expression pattern to match __FILE__ and __DIR__ constants.
         *
         * We try to be smart and only replace the constants when they are not within quotes.
         * Regular expressions being stateless, this is probably not 100% correct for edge cases.
         *
         * @see https://regex101.com/r/9hXp5d/4/
         *
         * @var string
         */
        const FILE_DIR_PATTERN = '/(?>\'[^\']*?\')|(?>"[^"]*?")|(?<file>\\b__FILE__\\b)|(?<dir>\\b__DIR__\\b)/m';
        /**
         * Loads and executes a PHP file.
         *
         * Note: because code is executed within a method, global variables need
         * to be explicitly globalized.
         *
         * ## OPTIONS
         *
         * <file>
         * : The path to the PHP file to execute.  Use '-' to run code from STDIN.
         *
         * [<arg>...]
         * : One or more arguments to pass to the file. They are placed in the $args variable.
         *
         * [--skip-wordpress]
         * : Load and execute file without loading WordPress.
         *
         * @when before_wp_load
         *
         * ## EXAMPLES
         *
         *     wp eval-file my-code.php value1 value2
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Evaluate a provided file.
         *
         * @param string $file Filepath to execute, or - for STDIN.
         * @param mixed  $args Array of positional arguments to pass to the file.
         */
        private static function execute_eval($file, $args)
        {
        }
    }
    class Eval_Command extends \WP_CLI_Command
    {
        /**
         * Executes arbitrary PHP code.
         *
         * Note: because code is executed within a method, global variables need
         * to be explicitly globalized.
         *
         * ## OPTIONS
         *
         * <php-code>
         * : The code to execute, as a string.
         *
         * [--skip-wordpress]
         * : Execute code without loading WordPress.
         *
         * ## EXAMPLES
         *
         *     # Display WordPress content directory.
         *     $ wp eval 'echo WP_CONTENT_DIR;'
         *     /var/www/wordpress/wp-content
         *
         *     # Generate a random number.
         *     $ wp eval 'echo rand();' --skip-wordpress
         *     479620423
         *
         * @when before_wp_load
         */
        public function __invoke($args, $assoc_args)
        {
        }
    }
    /**
     * Exports WordPress content to a WXR file.
     *
     * ## EXAMPLES
     *
     *     # Export posts published by the user between given start and end date
     *     $ wp export --dir=/tmp/ --user=admin --post_type=post --start_date=2011-01-01 --end_date=2011-12-31
     *     Starting export process...
     *     Writing to file /tmp/staging.wordpress.2016-05-24.000.xml
     *     Success: All done with export.
     *
     * @package wp-cli
     */
    class Export_Command extends \WP_CLI_Command
    {
        /**
         * Initialize the array of arguments that will be eventually be passed to export_wp.
         *
         * @var array
         */
        public $export_args = [];
        private $stdout;
        private $max_file_size;
        private $wxr_path;
        /**
         * Exports WordPress content to a WXR file.
         *
         * Generates one or more WXR files containing authors, terms, posts,
         * comments, and attachments. WXR files do not include site configuration
         * (options) or the attachment files themselves.
         *
         * ## OPTIONS
         *
         * [--dir=<dirname>]
         * : Full path to directory where WXR export files should be stored. Defaults
         * to current working directory.
         *
         * [--stdout]
         * : Output the whole XML using standard output (incompatible with --dir=)
         *
         * [--skip_comments]
         * : Don't include comments in the WXR export file.
         *
         * [--max_file_size=<MB>]
         * : A single export file should have this many megabytes. -1 for unlimited.
         * ---
         * default: 15
         * ---
         *
         * ## FILTERS
         *
         * [--start_date=<date>]
         * : Export only posts published after this date, in format YYYY-MM-DD.
         *
         * [--end_date=<date>]
         * : Export only posts published before this date, in format YYYY-MM-DD.
         *
         * [--post_type=<post-type>]
         * : Export only posts with this post_type. Separate multiple post types with a
         * comma.
         * ---
         * default: any
         * ---
         *
         * [--post_type__not_in=<post-type>]
         * : Export all post types except those identified. Separate multiple post types
         * with a comma. Defaults to none.
         *
         * [--post__in=<pid>]
         * : Export all posts specified as a comma- or space-separated list of IDs.
         * Post's attachments won't be exported unless --with_attachments is specified.
         *
         * [--with_attachments]
         * : Force including attachments in case --post__in has been specified.
         *
         * [--start_id=<pid>]
         * : Export only posts with IDs greater than or equal to this post ID.
         *
         * [--max_num_posts=<num>]
         * : Export no more than <num> posts (excluding attachments).
         *
         * [--author=<author>]
         * : Export only posts by this author. Can be either user login or user ID.
         *
         * [--category=<name>]
         * : Export only posts in this category.
         *
         * [--post_status=<status>]
         * : Export only posts with this status.
         *
         * [--filename_format=<format>]
         * : Use a custom format for export filenames. Defaults to '{site}.wordpress.{date}.{n}.xml'.
         *
         * ## EXAMPLES
         *
         *     # Export posts published by the user between given start and end date
         *     $ wp export --dir=/tmp/ --user=admin --post_type=post --start_date=2011-01-01 --end_date=2011-12-31
         *     Starting export process...
         *     Writing to file /tmp/staging.wordpress.2016-05-24.000.xml
         *     Success: All done with export.
         *
         *     # Export posts by IDs
         *     $ wp export --dir=/tmp/ --post__in=123,124,125
         *     Starting export process...
         *     Writing to file /tmp/staging.wordpress.2016-05-24.000.xml
         *     Success: All done with export.
         *
         *     # Export a random subset of content
         *     $ wp export --post__in="$(wp post list --post_type=post --orderby=rand --posts_per_page=8 --format=ids)"
         *     Starting export process...
         *     Writing to file /var/www/example.com/public_html/staging.wordpress.2016-05-24.000.xml
         *     Success: All done with export.
         */
        public function __invoke($_, $assoc_args)
        {
        }
        private static function get_filename_template($filename_format)
        {
        }
        public static function load_export_api()
        {
        }
        private function validate_args($args)
        {
        }
        private function check_dir($path)
        {
        }
        private function check_start_date($date)
        {
        }
        private function check_end_date($date)
        {
        }
        private function check_post_type($post_type)
        {
        }
        private function check_post_type__not_in($post_type)
        {
        }
        private function check_post__in($post__in)
        {
        }
        private function check_start_id($start_id)
        {
        }
        private function check_author($author)
        {
        }
        private function check_max_num_posts($num)
        {
        }
        private function check_category($category)
        {
        }
        private function check_post_status($status)
        {
        }
        private function check_skip_comments($skip)
        {
        }
        private function check_max_file_size($size)
        {
        }
    }
    abstract class WP_Export_Base_Writer
    {
        protected $formatter;
        public function __construct($formatter)
        {
        }
        public function export()
        {
        }
        protected abstract function write($xml);
    }
    class WP_Export_Exception extends \RuntimeException
    {
    }
    class WP_Export_File_Writer extends \WP_Export_Base_Writer
    {
        private $f;
        private $file_name;
        public function __construct($formatter, $file_name)
        {
        }
        public function export()
        {
        }
        protected function write($xml)
        {
        }
    }
    class WP_Export_Oxymel extends \Oxymel
    {
        public function optional($tag_name, $contents)
        {
        }
        public function optional_cdata($tag_name, $contents)
        {
        }
        public function cdata($text)
        {
        }
    }
    /**
     * Represents a set of posts and other site data to be exported.
     *
     * An immutable object, which gathers all data needed for the export.
     */
    class WP_Export_Query
    {
        const QUERY_CHUNK = 100;
        private static $defaults = array('post_ids' => \null, 'post_type' => \null, 'status' => \null, 'author' => \null, 'start_date' => \null, 'end_date' => \null, 'start_id' => \null, 'max_num_posts' => \null, 'category' => \null);
        private $post_ids;
        private $filters;
        private $xml_gen;
        private $wheres = array();
        private $joins = array();
        private $author;
        private $category;
        public $missing_parents = \false;
        public function __construct($filters = array())
        {
        }
        public function post_ids()
        {
        }
        public function charset()
        {
        }
        public function site_metadata()
        {
        }
        public function wp_generator_tag()
        {
        }
        public function authors()
        {
        }
        public function categories()
        {
        }
        public function tags()
        {
        }
        public function custom_taxonomies_terms()
        {
        }
        public function nav_menu_terms()
        {
        }
        public function exportify_post($post)
        {
        }
        public function posts()
        {
        }
        private function calculate_post_ids()
        {
        }
        private function post_type_where()
        {
        }
        private function status_where()
        {
        }
        private function author_where()
        {
        }
        private function start_date_where()
        {
        }
        private function end_date_where()
        {
        }
        private function start_id_where()
        {
        }
        private function get_timestamp_for_the_last_day_of_a_month($yyyy_mm)
        {
        }
        private function category_where()
        {
        }
        private function max_num_posts()
        {
        }
        private function include_attachment_ids($post_ids)
        {
        }
        private function bloginfo_rss($section)
        {
        }
        private function find_user_from_any_object($user)
        {
        }
        private function find_category_from_any_object($category)
        {
        }
        private static function topologically_sort_terms($terms)
        {
        }
        private function check_for_orphaned_terms($terms)
        {
        }
        private static function get_terms_for_post($post)
        {
        }
        private static function get_meta_for_post($post)
        {
        }
        private function get_comments_for_post($post)
        {
        }
    }
    class WP_Export_Returner extends \WP_Export_Base_Writer
    {
        private $result = '';
        public function export()
        {
        }
        protected function write($xml)
        {
        }
    }
    class WP_Export_Split_Files_Writer extends \WP_Export_Base_Writer
    {
        private $max_file_size;
        private $destination_directory;
        private $filename_template;
        private $before_posts_xml;
        private $after_posts_xml;
        private $f;
        private $next_file_number = 0;
        private $current_file_size = 0;
        public function __construct($formatter, $writer_args = [])
        {
        }
        public function export()
        {
        }
        protected function write($xml)
        {
        }
        private function start_new_file()
        {
        }
        private function close_current_file()
        {
        }
        private function next_file_name()
        {
        }
        private function next_file_path()
        {
        }
    }
    class WP_Export_Term_Exception extends \RuntimeException
    {
    }
    //phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedConstantFound -- WordPress constant.
    /**
     * Responsible for formatting the data in WP_Export_Query to WXR
     */
    class WP_Export_WXR_Formatter
    {
        public function __construct($export)
        {
        }
        public function before_posts($requested_sections = [])
        {
        }
        public function posts()
        {
        }
        public function after_posts()
        {
        }
        public function header()
        {
        }
        public function site_metadata()
        {
        }
        public function authors()
        {
        }
        public function categories()
        {
        }
        public function tags()
        {
        }
        public function nav_menu_terms()
        {
        }
        public function custom_taxonomies_terms()
        {
        }
        public function rss2_head_action()
        {
        }
        public function post($post)
        {
        }
        public function footer()
        {
        }
        protected function terms($terms)
        {
        }
        protected function comment_meta($comment)
        {
        }
    }
    class WP_Export_XML_Over_HTTP extends \WP_Export_Base_Writer
    {
        private $file_name;
        public function __construct($formatter, $file_name)
        {
        }
        public function export()
        {
        }
        protected function write($xml)
        {
        }
        protected function get_export()
        {
        }
        protected function send_headers()
        {
        }
    }
    class WP_Iterator_Exception extends \Exception
    {
    }
    class WP_Map_Iterator extends \IteratorIterator
    {
        public function __construct($iterator, $callback)
        {
        }
        public function current()
        {
        }
    }
    class WP_Post_IDs_Iterator implements \Iterator
    {
        private $limit = 100;
        private $post_ids;
        private $ids_left;
        private $results = array();
        public function __construct($post_ids, $limit = \null)
        {
        }
        public function current()
        {
        }
        public function key()
        {
        }
        public function next()
        {
        }
        public function rewind()
        {
        }
        public function valid()
        {
        }
        private function load_next_posts_from_db()
        {
        }
    }
}
namespace WP_CLI {
    abstract class CommandWithUpgrade extends \WP_CLI_Command
    {
        protected $item_type;
        protected $obj_fields;
        protected $upgrade_refresh;
        protected $upgrade_transient;
        protected $chained_command = false;
        // Invalid version message.
        const INVALID_VERSION_MESSAGE = 'version higher than expected';
        public function __construct()
        {
        }
        protected abstract function get_upgrader_class($force);
        protected abstract function get_item_list();
        /**
         * @param array List of update candidates
         * @param array List of item names
         * @return array List of update candidates
         */
        protected abstract function filter_item_list($items, $args);
        protected abstract function get_all_items();
        protected abstract function get_status($file);
        protected abstract function status_single($args);
        protected abstract function install_from_repo($slug, $assoc_args);
        public function status($args)
        {
        }
        private function status_all()
        {
        }
        private function get_padding($items)
        {
        }
        private function show_legend($items)
        {
        }
        public function install($args, $assoc_args)
        {
        }
        /**
         * Prepare an API response for downloading a particular version of an item.
         *
         * @param object $response wordpress.org API response
         * @param string $version The desired version of the package
         */
        protected static function alter_api_response($response, $version)
        {
        }
        protected function get_upgrader($assoc_args)
        {
        }
        protected function update_many($args, $assoc_args)
        {
        }
        // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore -- Whitelisting to provide backward compatibility to classes possibly extending this class.
        protected function _list($_, $assoc_args)
        {
        }
        /**
         * Check whether an item has an update available or not.
         *
         * @param string $slug The plugin/theme slug
         *
         * @return bool
         */
        protected function has_update($slug)
        {
        }
        /**
         * Get the available update info
         *
         * @return mixed
         */
        protected function get_update_info()
        {
        }
        private $map = ['short' => ['inactive' => 'I', 'active' => 'A', 'active-network' => 'N', 'must-use' => 'M', 'parent' => 'P', 'dropin' => 'D'], 'long' => ['inactive' => 'Inactive', 'active' => 'Active', 'active-network' => 'Network Active', 'must-use' => 'Must Use', 'parent' => 'Parent', 'dropin' => 'Drop-In']];
        protected function format_status($status, $format)
        {
        }
        private function get_color($status)
        {
        }
        /**
         * Get the minor or patch version for plugins with available updates
         *
         * @param array  $items Plugins with updates.
         * @param string $type  Either 'minor' or 'patch'
         * @return array
         */
        private function get_minor_or_patch_updates($items, $type)
        {
        }
        /**
         * Search wordpress.org repo.
         *
         * @param  array $args       A arguments array containing the search term in the first element.
         * @param  array $assoc_args Data passed in from command.
         */
        // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore -- Whitelisting to provide backward compatibility to classes possibly extending this class.
        protected function _search($args, $assoc_args)
        {
        }
        protected function get_formatter(&$assoc_args)
        {
        }
        /**
         * Error handler to ignore failures on accessing SSL "https://api.wordpress.org/themes/update-check/1.1/" in `wp_update_themes()`
         * and "https://api.wordpress.org/plugins/update-check/1.1/" in `wp_update_plugins()` which seem to occur intermittently.
         */
        public static function error_handler($errno, $errstr, $errfile, $errline, $errcontext = null)
        {
        }
        /**
         * Retrieves PHP_URL_HOST component from URL.
         *
         * @param int $component The component to retrieve.
         *
         * @return string
         */
        private function parse_url_host_component($url, $component)
        {
        }
    }
}
namespace {
    /**
     * Manages plugins, including installs, activations, and updates.
     *
     * See the WordPress [Plugin Handbook](https://developer.wordpress.org/plugins/) developer resource for more information on plugins.
     *
     * ## EXAMPLES
     *
     *     # Activate plugin
     *     $ wp plugin activate hello
     *     Plugin 'hello' activated.
     *     Success: Activated 1 of 1 plugins.
     *
     *     # Deactivate plugin
     *     $ wp plugin deactivate hello
     *     Plugin 'hello' deactivated.
     *     Success: Deactivated 1 of 1 plugins.
     *
     *     # Delete plugin
     *     $ wp plugin delete hello
     *     Deleted 'hello' plugin.
     *     Success: Deleted 1 of 1 plugins.
     *
     *     # Install the latest version from wordpress.org and activate
     *     $ wp plugin install bbpress --activate
     *     Installing bbPress (2.5.9)
     *     Downloading install package from https://downloads.wordpress.org/plugin/bbpress.2.5.9.zip...
     *     Using cached file '/home/vagrant/.wp-cli/cache/plugin/bbpress-2.5.9.zip'...
     *     Unpacking the package...
     *     Installing the plugin...
     *     Plugin installed successfully.
     *     Activating 'bbpress'...
     *     Plugin 'bbpress' activated.
     *     Success: Installed 1 of 1 plugins.
     *
     * @package wp-cli
     */
    class Plugin_Command extends \WP_CLI\CommandWithUpgrade
    {
        protected $item_type = 'plugin';
        protected $upgrade_refresh = 'wp_update_plugins';
        protected $upgrade_transient = 'update_plugins';
        protected $obj_fields = array('name', 'status', 'update', 'version');
        public function __construct()
        {
        }
        protected function get_upgrader_class($force)
        {
        }
        /**
         * Reveals the status of one or all plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>]
         * : A particular plugin to show the status for.
         *
         * ## EXAMPLES
         *
         *     # Displays status of all plugins
         *     $ wp plugin status
         *     5 installed plugins:
         *       I akismet                3.1.11
         *       I easy-digital-downloads 2.5.16
         *       A theme-check            20160523.1
         *       I wen-logo-slider        2.0.3
         *       M ns-pack                1.0.0
         *     Legend: I = Inactive, A = Active, M = Must Use
         *
         *     # Displays status of a plugin
         *     $ wp plugin status theme-check
         *     Plugin theme-check details:
         *         Name: Theme Check
         *         Status: Active
         *         Version: 20160523.1
         *         Author: Otto42, pross
         *         Description: A simple and easy way to test your theme for all the latest WordPress standards and practices. A great theme development tool!
         */
        public function status($args)
        {
        }
        /**
         * Searches the WordPress.org plugin directory.
         *
         * Displays plugins in the WordPress.org plugin directory matching a given
         * search query.
         *
         * ## OPTIONS
         *
         * <search>
         * : The string to search for.
         *
         * [--page=<page>]
         * : Optional page to display.
         * ---
         * default: 1
         * ---
         *
         * [--per-page=<per-page>]
         * : Optional number of results to display.
         * ---
         * default: 10
         * ---
         *
         * [--field=<field>]
         * : Prints the value of a single field for each plugin.
         *
         * [--fields=<fields>]
         * : Ask for specific fields from the API. Defaults to name,slug,author_profile,rating. Acceptable values:
         *
         *     **name**: Plugin Name
         *     **slug**: Plugin Slug
         *     **version**: Current Version Number
         *     **author**: Plugin Author
         *     **author_profile**: Plugin Author Profile
         *     **contributors**: Plugin Contributors
         *     **requires**: Plugin Minimum Requirements
         *     **tested**: Plugin Tested Up To
         *     **compatibility**: Plugin Compatible With
         *     **rating**: Plugin Rating in Percent and Total Number
         *     **ratings**: Plugin Ratings for each star (1-5)
         *     **num_ratings**: Number of Plugin Ratings
         *     **homepage**: Plugin Author's Homepage
         *     **description**: Plugin's Description
         *     **short_description**: Plugin's Short Description
         *     **sections**: Plugin Readme Sections: description, installation, FAQ, screenshots, other notes, and changelog
         *     **downloaded**: Plugin Download Count
         *     **last_updated**: Plugin's Last Update
         *     **added**: Plugin's Date Added to wordpress.org Repository
         *     **tags**: Plugin's Tags
         *     **versions**: Plugin's Available Versions with D/L Link
         *     **donate_link**: Plugin's Donation Link
         *     **banners**: Plugin's Banner Image Link
         *     **icons**: Plugin's Icon Image Link
         *     **active_installs**: Plugin's Number of Active Installs
         *     **contributors**: Plugin's List of Contributors
         *     **url**: Plugin's URL on wordpress.org
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - count
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp plugin search dsgnwrks --per-page=20 --format=json
         *     Success: Showing 3 of 3 plugins.
         *     [{"name":"DsgnWrks Instagram Importer Debug","slug":"dsgnwrks-instagram-importer-debug","rating":0},{"name":"DsgnWrks Instagram Importer","slug":"dsgnwrks-instagram-importer","rating":84},{"name":"DsgnWrks Twitter Importer","slug":"dsgnwrks-twitter-importer","rating":80}]
         *
         *     $ wp plugin search dsgnwrks --fields=name,version,slug,rating,num_ratings
         *     Success: Showing 3 of 3 plugins.
         *     +-----------------------------------+---------+-----------------------------------+--------+-------------+
         *     | name                              | version | slug                              | rating | num_ratings |
         *     +-----------------------------------+---------+-----------------------------------+--------+-------------+
         *     | DsgnWrks Instagram Importer Debug | 0.1.6   | dsgnwrks-instagram-importer-debug | 0      | 0           |
         *     | DsgnWrks Instagram Importer       | 1.3.7   | dsgnwrks-instagram-importer       | 84     | 23          |
         *     | DsgnWrks Twitter Importer         | 1.1.1   | dsgnwrks-twitter-importer         | 80     | 1           |
         *     +-----------------------------------+---------+-----------------------------------+--------+-------------+
         */
        public function search($args, $assoc_args)
        {
        }
        protected function status_single($args)
        {
        }
        protected function get_all_items()
        {
        }
        /**
         * Activates one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to activate.
         *
         * [--all]
         * : If set, all plugins will be activated.
         *
         * [--network]
         * : If set, the plugin will be activated for the entire multisite network.
         *
         * ## EXAMPLES
         *
         *     # Activate plugin
         *     $ wp plugin activate hello
         *     Plugin 'hello' activated.
         *     Success: Activated 1 of 1 plugins.
         *
         *     # Activate plugin in entire multisite network
         *     $ wp plugin activate hello --network
         *     Plugin 'hello' network activated.
         *     Success: Network activated 1 of 1 plugins.
         */
        public function activate($args, $assoc_args = array())
        {
        }
        /**
         * Deactivates one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to deactivate.
         *
         * [--uninstall]
         * : Uninstall the plugin after deactivation.
         *
         * [--all]
         * : If set, all plugins will be deactivated.
         *
         * [--network]
         * : If set, the plugin will be deactivated for the entire multisite network.
         *
         * ## EXAMPLES
         *
         *     # Deactivate plugin
         *     $ wp plugin deactivate hello
         *     Plugin 'hello' deactivated.
         *     Success: Deactivated 1 of 1 plugins.
         */
        public function deactivate($args, $assoc_args = array())
        {
        }
        /**
         * Toggles a plugin's activation state.
         *
         * If the plugin is active, then it will be deactivated. If the plugin is
         * inactive, then it will be activated.
         *
         * ## OPTIONS
         *
         * <plugin>...
         * : One or more plugins to toggle.
         *
         * [--network]
         * : If set, the plugin will be toggled for the entire multisite network.
         *
         * ## EXAMPLES
         *
         *     # Akismet is currently activated
         *     $ wp plugin toggle akismet
         *     Plugin 'akismet' deactivated.
         *     Success: Toggled 1 of 1 plugins.
         *
         *     # Akismet is currently deactivated
         *     $ wp plugin toggle akismet
         *     Plugin 'akismet' activated.
         *     Success: Toggled 1 of 1 plugins.
         */
        public function toggle($args, $assoc_args = array())
        {
        }
        /**
         * Gets the path to a plugin or to the plugin directory.
         *
         * ## OPTIONS
         *
         * [<plugin>]
         * : The plugin to get the path to. If not set, will return the path to the
         * plugins directory.
         *
         * [--dir]
         * : If set, get the path to the closest parent directory, instead of the
         * plugin file.
         *
         * ## EXAMPLES
         *
         *     $ cd $(wp plugin path) && pwd
         *     /var/www/wordpress/wp-content/plugins
         */
        public function path($args, $assoc_args)
        {
        }
        protected function install_from_repo($slug, $assoc_args)
        {
        }
        /**
         * Updates one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to update.
         *
         * [--all]
         * : If set, all plugins that have updates will be updated.
         *
         * [--exclude=<name>]
         * : Comma separated list of plugin names that should be excluded from updating.
         *
         * [--minor]
         * : Only perform updates for minor releases (e.g. from 1.3 to 1.4 instead of 2.0)
         *
         * [--patch]
         * : Only perform updates for patch releases (e.g. from 1.3 to 1.3.3 instead of 1.4)
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - summary
         * ---
         *
         * [--version=<version>]
         * : If set, the plugin will be updated to the specified version.
         *
         * [--dry-run]
         * : Preview which plugins would be updated.
         *
         * ## EXAMPLES
         *
         *     $ wp plugin update bbpress --version=dev
         *     Installing bbPress (Development Version)
         *     Downloading install package from https://downloads.wordpress.org/plugin/bbpress.zip...
         *     Unpacking the package...
         *     Installing the plugin...
         *     Removing the old version of the plugin...
         *     Plugin updated successfully.
         *     Success: Updated 1 of 2 plugins.
         *
         *     $ wp plugin update --all
         *     Enabling Maintenance mode...
         *     Downloading update from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the plugin...
         *     Plugin updated successfully.
         *     Downloading update from https://downloads.wordpress.org/plugin/nginx-champuru.3.2.0.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the plugin...
         *     Plugin updated successfully.
         *     Disabling Maintenance mode...
         *     +------------------------+-------------+-------------+---------+
         *     | name                   | old_version | new_version | status  |
         *     +------------------------+-------------+-------------+---------+
         *     | akismet                | 3.1.3       | 3.1.11      | Updated |
         *     | nginx-cache-controller | 3.1.1       | 3.2.0       | Updated |
         *     +------------------------+-------------+-------------+---------+
         *     Success: Updated 2 of 2 plugins.
         *
         *     $ wp plugin update --all --exclude=akismet
         *     Enabling Maintenance mode...
         *     Downloading update from https://downloads.wordpress.org/plugin/nginx-champuru.3.2.0.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the plugin...
         *     Plugin updated successfully.
         *     Disabling Maintenance mode...
         *     +------------------------+-------------+-------------+---------+
         *     | name                   | old_version | new_version | status  |
         *     +------------------------+-------------+-------------+---------+
         *     | nginx-cache-controller | 3.1.1       | 3.2.0       | Updated |
         *     +------------------------+-------------+-------------+---------+
         *
         * @alias upgrade
         */
        public function update($args, $assoc_args)
        {
        }
        protected function get_item_list()
        {
        }
        protected function filter_item_list($items, $args)
        {
        }
        /**
         * Installs one or more plugins.
         *
         * ## OPTIONS
         *
         * <plugin|zip|url>...
         * : One or more plugins to install. Accepts a plugin slug, the path to a local zip file, or a URL to a remote zip file.
         *
         * [--version=<version>]
         * : If set, get that particular version from wordpress.org, instead of the
         * stable version.
         *
         * [--force]
         * : If set, the command will overwrite any installed version of the plugin, without prompting
         * for confirmation.
         *
         * [--activate]
         * : If set, the plugin will be activated immediately after install.
         *
         * [--activate-network]
         * : If set, the plugin will be network activated immediately after install
         *
         * ## EXAMPLES
         *
         *     # Install the latest version from wordpress.org and activate
         *     $ wp plugin install bbpress --activate
         *     Installing bbPress (2.5.9)
         *     Downloading install package from https://downloads.wordpress.org/plugin/bbpress.2.5.9.zip...
         *     Using cached file '/home/vagrant/.wp-cli/cache/plugin/bbpress-2.5.9.zip'...
         *     Unpacking the package...
         *     Installing the plugin...
         *     Plugin installed successfully.
         *     Activating 'bbpress'...
         *     Plugin 'bbpress' activated.
         *     Success: Installed 1 of 1 plugins.
         *
         *     # Install the development version from wordpress.org
         *     $ wp plugin install bbpress --version=dev
         *     Installing bbPress (Development Version)
         *     Downloading install package from https://downloads.wordpress.org/plugin/bbpress.zip...
         *     Unpacking the package...
         *     Installing the plugin...
         *     Plugin installed successfully.
         *     Success: Installed 1 of 1 plugins.
         *
         *     # Install from a local zip file
         *     $ wp plugin install ../my-plugin.zip
         *     Unpacking the package...
         *     Installing the plugin...
         *     Plugin installed successfully.
         *     Success: Installed 1 of 1 plugins.
         *
         *     # Install from a remote zip file
         *     $ wp plugin install http://s3.amazonaws.com/bucketname/my-plugin.zip?AWSAccessKeyId=123&Expires=456&Signature=abcdef
         *     Downloading install package from http://s3.amazonaws.com/bucketname/my-plugin.zip?AWSAccessKeyId=123&Expires=456&Signature=abcdef
         *     Unpacking the package...
         *     Installing the plugin...
         *     Plugin installed successfully.
         *     Success: Installed 1 of 1 plugins.
         *
         *     # Update from a remote zip file
         *     $ wp plugin install https://github.com/envato/wp-envato-market/archive/master.zip --force
         *     Downloading install package from https://github.com/envato/wp-envato-market/archive/master.zip
         *     Unpacking the package...
         *     Installing the plugin...
         *     Renamed Github-based project from 'wp-envato-market-master' to 'wp-envato-market'.
         *     Plugin updated successfully
         *     Success: Installed 1 of 1 plugins.
         *
         *     # Forcefully re-install all installed plugins
         *     $ wp plugin install $(wp plugin list --field=name) --force
         *     Installing Akismet (3.1.11)
         *     Downloading install package from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
         *     Unpacking the package...
         *     Installing the plugin...
         *     Removing the old version of the plugin...
         *     Plugin updated successfully
         *     Success: Installed 1 of 1 plugins.
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Gets details about an installed plugin.
         *
         * ## OPTIONS
         *
         * <plugin>
         * : The plugin to get.
         *
         * [--field=<field>]
         * : Instead of returning the whole plugin, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp plugin get bbpress --format=json
         *     {"name":"bbpress","title":"bbPress","author":"The bbPress Contributors","version":"2.6-alpha","description":"bbPress is forum software with a twist from the creators of WordPress.","status":"active"}
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Uninstalls one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to uninstall.
         *
         * [--deactivate]
         * : Deactivate the plugin before uninstalling. Default behavior is to warn and skip if the plugin is active.
         *
         * [--skip-delete]
         * : If set, the plugin files will not be deleted. Only the uninstall procedure
         * will be run.
         *
         * [--all]
         * : If set, all plugins will be uninstalled.
         *
         * ## EXAMPLES
         *
         *     $ wp plugin uninstall hello
         *     Uninstalled and deleted 'hello' plugin.
         *     Success: Uninstalled 1 of 1 plugins.
         */
        public function uninstall($args, $assoc_args = array())
        {
        }
        /**
         * Checks if a given plugin is installed.
         *
         * Returns exit code 0 when installed, 1 when uninstalled.
         *
         * ## OPTIONS
         *
         * <plugin>
         * : The plugin to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether plugin is installed; exit status 0 if installed, otherwise 1
         *     $ wp plugin is-installed hello
         *     $ echo $?
         *     1
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args = array())
        {
        }
        /**
         * Checks if a given plugin is active.
         *
         * Returns exit code 0 when active, 1 when not active.
         *
         * ## OPTIONS
         *
         * <plugin>
         * : The plugin to check.
         *
         * [--network]
         * : If set, check if plugin is network-activated.
         *
         * ## EXAMPLES
         *
         *     # Check whether plugin is Active; exit status 0 if active, otherwise 1
         *     $ wp plugin is-active hello
         *     $ echo $?
         *     1
         *
         * @subcommand is-active
         */
        public function is_active($args, $assoc_args = array())
        {
        }
        /**
         * Deletes plugin files without deactivating or uninstalling.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to delete.
         *
         * [--all]
         * : If set, all plugins will be deleted.
         *
         * ## EXAMPLES
         *
         *     # Delete plugin
         *     $ wp plugin delete hello
         *     Deleted 'hello' plugin.
         *     Success: Deleted 1 of 1 plugins.
         *
         *     # Delete inactive plugins
         *     $ wp plugin delete $(wp plugin list --status=inactive --field=name)
         *     Deleted 'tinymce-templates' plugin.
         *     Success: Deleted 1 of 1 plugins.
         */
        public function delete($args, $assoc_args = array())
        {
        }
        /**
         * Gets a list of plugins.
         *
         * Displays a list of the plugins installed on the site with activation
         * status, whether or not there's an update available, etc.
         *
         * Use `--status=dropin` to list installed dropins (e.g. `object-cache.php`).
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : Filter results based on the value of a field.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each plugin.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - count
         *   - json
         *   - yaml
         * ---
         *
         * [--status=<status>]
         * : Filter the output by plugin status.
         * ---
         * options:
         *   - active
         *   - active-network
         *   - dropin
         *   - inactive
         *   - must-use
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each plugin:
         *
         * * name
         * * status
         * * update
         * * version
         *
         * These fields are optionally available:
         *
         * * update_version
         * * update_package
         * * update_id
         * * title
         * * description
         * * file
         *
         * ## EXAMPLES
         *
         *     # List active plugins on the site.
         *     $ wp plugin list --status=active --format=json
         *     [{"name":"dynamic-hostname","status":"active","update":"none","version":"0.4.2"},{"name":"tinymce-templates","status":"active","update":"none","version":"4.4.3"},{"name":"wp-multibyte-patch","status":"active","update":"none","version":"2.4"},{"name":"wp-total-hacks","status":"active","update":"none","version":"2.0.1"}]
         *
         *     # List plugins on each site in a network.
         *     $ wp site list --field=url | xargs -I % wp plugin list --url=%
         *     +---------+----------------+--------+---------+
         *     | name    | status         | update | version |
         *     +---------+----------------+--------+---------+
         *     | akismet | active-network | none   | 3.1.11  |
         *     | hello   | inactive       | none   | 1.6     |
         *     +---------+----------------+--------+---------+
         *     +---------+----------------+--------+---------+
         *     | name    | status         | update | version |
         *     +---------+----------------+--------+---------+
         *     | akismet | active-network | none   | 3.1.11  |
         *     | hello   | inactive       | none   | 1.6     |
         *     +---------+----------------+--------+---------+
         *
         * @subcommand list
         */
        public function list_($_, $assoc_args)
        {
        }
        /* PRIVATES */
        private function check_active($file, $network_wide)
        {
        }
        private function active_output($name, $file, $network_wide, $action)
        {
        }
        protected function get_status($file)
        {
        }
        /**
         * Gets the template path based on installation type.
         */
        private static function get_template_path($template)
        {
        }
        /**
         * Gets the details of a plugin.
         *
         * @param object
         * @return array
         */
        private function get_details($file)
        {
        }
        private function delete_plugin($plugin)
        {
        }
        /**
         * Gets all available plugins.
         *
         * Uses the same filter core uses in plugins.php to determine which plugins
         * should be available to manage through the WP_Plugins_List_Table class.
         *
         * @return array
         */
        private function get_all_plugins()
        {
        }
        /**
         * If have optional args ([<plugin>...]) and an all option, then check have something to do.
         *
         * @param array $args Passed-in arguments.
         * @param bool $all All flag.
         * @return array Same as $args if not all, otherwise all slugs.
         */
        private function check_optional_args_and_all($args, $all, $verb = 'install')
        {
        }
    }
    /**
     * Manages themes, including installs, activations, and updates.
     *
     * See the WordPress [Theme Handbook](https://developer.wordpress.org/themes/) developer resource for more information on themes.
     *
     * ## EXAMPLES
     *
     *     # Install the latest version of a theme from wordpress.org and activate
     *     $ wp theme install twentysixteen --activate
     *     Installing Twenty Sixteen (1.2)
     *     Downloading install package from http://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
     *     Unpacking the package...
     *     Installing the theme...
     *     Theme installed successfully.
     *     Activating 'twentysixteen'...
     *     Success: Switched to 'Twenty Sixteen' theme.
     *
     *     # Get details of an installed theme
     *     $ wp theme get twentysixteen --fields=name,title,version
     *     +---------+----------------+
     *     | Field   | Value          |
     *     +---------+----------------+
     *     | name    | Twenty Sixteen |
     *     | title   | Twenty Sixteen |
     *     | version | 1.2            |
     *     +---------+----------------+
     *
     *     # Get status of theme
     *     $ wp theme status twentysixteen
     *     Theme twentysixteen details:
     *          Name: Twenty Sixteen
     *          Status: Active
     *          Version: 1.2
     *          Author: the WordPress team
     *
     * @package wp-cli
     */
    class Theme_Command extends \WP_CLI\CommandWithUpgrade
    {
        protected $item_type = 'theme';
        protected $upgrade_refresh = 'wp_update_themes';
        protected $upgrade_transient = 'update_themes';
        protected $obj_fields = ['name', 'status', 'update', 'version'];
        public function __construct()
        {
        }
        protected function get_upgrader_class($force)
        {
        }
        /**
         * Reveals the status of one or all themes.
         *
         * ## OPTIONS
         *
         * [<theme>]
         * : A particular theme to show the status for.
         *
         * ## EXAMPLES
         *
         *     $ wp theme status twentysixteen
         *     Theme twentysixteen details:
         *          Name: Twenty Sixteen
         *          Status: Inactive
         *          Version: 1.2
         *          Author: the WordPress team
         */
        public function status($args)
        {
        }
        /**
         * Searches the WordPress.org theme directory.
         *
         * Displays themes in the WordPress.org theme directory matching a given
         * search query.
         *
         * ## OPTIONS
         *
         * <search>
         * : The string to search for.
         *
         * [--page=<page>]
         * : Optional page to display.
         * ---
         * default: 1
         * ---
         *
         * [--per-page=<per-page>]
         * : Optional number of results to display. Defaults to 10.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each theme.
         *
         * [--fields=<fields>]
         * : Ask for specific fields from the API. Defaults to name,slug,author,rating. Acceptable values:
         *
         *     **name**: Theme Name
         *     **slug**: Theme Slug
         *     **version**: Current Version Number
         *     **author**: Theme Author
         *     **preview_url**: Theme Preview URL
         *     **screenshot_url**: Theme Screenshot URL
         *     **rating**: Theme Rating
         *     **num_ratings**: Number of Theme Ratings
         *     **homepage**: Theme Author's Homepage
         *     **description**: Theme Description
         *     **url**: Theme's URL on wordpress.org
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp theme search photo --per-page=6
         *     Success: Showing 6 of 203 themes.
         *     +----------------------+----------------------+--------+
         *     | name                 | slug                 | rating |
         *     +----------------------+----------------------+--------+
         *     | Photos               | photos               | 100    |
         *     | Infinite Photography | infinite-photography | 100    |
         *     | PhotoBook            | photobook            | 100    |
         *     | BG Photo Frame       | bg-photo-frame       | 0      |
         *     | fPhotography         | fphotography         | 0      |
         *     | Photo Perfect        | photo-perfect        | 98     |
         *     +----------------------+----------------------+--------+
         */
        public function search($args, $assoc_args)
        {
        }
        protected function status_single($args)
        {
        }
        protected function get_all_items()
        {
        }
        protected function get_status($theme)
        {
        }
        /**
         * Activates a theme.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The theme to activate.
         *
         * ## EXAMPLES
         *
         *     $ wp theme activate twentysixteen
         *     Success: Switched to 'Twenty Sixteen' theme.
         */
        public function activate($args = array())
        {
        }
        /**
         * Enables a theme on a WordPress multisite install.
         *
         * Permits theme to be activated from the dashboard of a site on a WordPress
         * multisite install.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The theme to enable.
         *
         * [--network]
         * : If set, the theme is enabled for the entire network
         *
         * [--activate]
         * : If set, the theme is activated for the current site. Note that
         * the "network" flag has no influence on this.
         *
         * ## EXAMPLES
         *
         *     # Enable theme
         *     $ wp theme enable twentysixteen
         *     Success: Enabled the 'Twenty Sixteen' theme.
         *
         *     # Network enable theme
         *     $ wp theme enable twentysixteen --network
         *     Success: Network enabled the 'Twenty Sixteen' theme.
         *
         *     # Network enable and activate theme for current site
         *     $ wp theme enable twentysixteen --activate
         *     Success: Enabled the 'Twenty Sixteen' theme.
         *     Success: Switched to 'Twenty Sixteen' theme.
         */
        public function enable($args, $assoc_args)
        {
        }
        /**
         * Disables a theme on a WordPress multisite install.
         *
         * Removes ability for a theme to be activated from the dashboard of a site
         * on a WordPress multisite install.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The theme to disable.
         *
         * [--network]
         * : If set, the theme is disabled on the network level. Note that
         * individual sites may still have this theme enabled if it was
         * enabled for them independently.
         *
         * ## EXAMPLES
         *
         *     # Disable theme
         *     $ wp theme disable twentysixteen
         *     Success: Disabled the 'Twenty Sixteen' theme.
         *
         *     # Disable theme in network level
         *     $ wp theme disable twentysixteen --network
         *     Success: Network disabled the 'Twenty Sixteen' theme.
         */
        public function disable($args, $assoc_args)
        {
        }
        private function is_active_theme($theme)
        {
        }
        /**
         * Gets the path to a theme or to the theme directory.
         *
         * ## OPTIONS
         *
         * [<theme>]
         * : The theme to get the path to. Path includes "style.css" file.
         * If not set, will return the path to the themes directory.
         *
         * [--dir]
         * : If set, get the path to the closest parent directory, instead of the
         * theme's "style.css" file.
         *
         * ## EXAMPLES
         *
         *     # Get theme path
         *     $ wp theme path
         *     /var/www/example.com/public_html/wp-content/themes
         *
         *     # Change directory to theme path
         *     $ cd $(wp theme path)
         */
        public function path($args, $assoc_args)
        {
        }
        protected function install_from_repo($slug, $assoc_args)
        {
        }
        protected function get_item_list()
        {
        }
        protected function filter_item_list($items, $args)
        {
        }
        /**
         * Installs one or more themes.
         *
         * ## OPTIONS
         *
         * <theme|zip|url>...
         * : One or more themes to install. Accepts a theme slug, the path to a local zip file, or a URL to a remote zip file.
         *
         * [--version=<version>]
         * : If set, get that particular version from wordpress.org, instead of the
         * stable version.
         *
         * [--force]
         * : If set, the command will overwrite any installed version of the theme, without prompting
         * for confirmation.
         *
         * [--activate]
         * : If set, the theme will be activated immediately after install.
         *
         * ## EXAMPLES
         *
         *     # Install the latest version from wordpress.org and activate
         *     $ wp theme install twentysixteen --activate
         *     Installing Twenty Sixteen (1.2)
         *     Downloading install package from http://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
         *     Unpacking the package...
         *     Installing the theme...
         *     Theme installed successfully.
         *     Activating 'twentysixteen'...
         *     Success: Switched to 'Twenty Sixteen' theme.
         *
         *     # Install from a local zip file
         *     $ wp theme install ../my-theme.zip
         *
         *     # Install from a remote zip file
         *     $ wp theme install http://s3.amazonaws.com/bucketname/my-theme.zip?AWSAccessKeyId=123&Expires=456&Signature=abcdef
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Gets details about a theme.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The theme to get.
         *
         * [--field=<field>]
         * : Instead of returning the whole theme, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp theme get twentysixteen --fields=name,title,version
         *     +---------+----------------+
         *     | Field   | Value          |
         *     +---------+----------------+
         *     | name    | Twenty Sixteen |
         *     | title   | Twenty Sixteen |
         *     | version | 1.2            |
         *     +---------+----------------+
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Updates one or more themes.
         *
         * ## OPTIONS
         *
         * [<theme>...]
         * : One or more themes to update.
         *
         * [--all]
         * : If set, all themes that have updates will be updated.
         *
         * [--exclude=<theme-names>]
         * : Comma separated list of theme names that should be excluded from updating.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - summary
         * ---
         *
         * [--version=<version>]
         * : If set, the theme will be updated to the specified version.
         *
         * [--dry-run]
         * : Preview which themes would be updated.
         *
         * ## EXAMPLES
         *
         *     # Update multiple themes
         *     $ wp theme update twentyfifteen twentysixteen
         *     Downloading update from https://downloads.wordpress.org/theme/twentyfifteen.1.5.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the theme...
         *     Theme updated successfully.
         *     Downloading update from https://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the theme...
         *     Theme updated successfully.
         *     +---------------+-------------+-------------+---------+
         *     | name          | old_version | new_version | status  |
         *     +---------------+-------------+-------------+---------+
         *     | twentyfifteen | 1.4         | 1.5         | Updated |
         *     | twentysixteen | 1.1         | 1.2         | Updated |
         *     +---------------+-------------+-------------+---------+
         *     Success: Updated 2 of 2 themes.
         *
         *     # Exclude themes updates when bulk updating the themes
         *     $ wp theme update --all --exclude=twentyfifteen
         *     Downloading update from https://downloads.wordpress.org/theme/astra.1.0.5.1.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the theme...
         *     Theme updated successfully.
         *     Downloading update from https://downloads.wordpress.org/theme/twentyseventeen.1.2.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Removing the old version of the theme...
         *     Theme updated successfully.
         *     +-----------------+----------+---------+----------------+
         *     | name            | status   | version | update_version |
         *     +-----------------+----------+---------+----------------+
         *     | astra           | inactive | 1.0.1   | 1.0.5.1        |
         *     | twentyseventeen | inactive | 1.1     | 1.2            |
         *     +-----------------+----------+---------+----------------+
         *     Success: Updated 2 of 2 themes.
         *
         *     # Update all themes
         *     $ wp theme update --all
         *
         * @alias upgrade
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Checks if a given theme is installed.
         *
         * Returns exit code 0 when installed, 1 when uninstalled.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The theme to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether theme is installed; exit status 0 if installed, otherwise 1
         *     $ wp theme is-installed hello
         *     $ echo $?
         *     1
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args = array())
        {
        }
        /**
         * Checks if a given theme is active.
         *
         * Returns exit code 0 when active, 1 when not active.
         *
         * ## OPTIONS
         *
         * <theme>
         * : The plugin to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether theme is Active; exit status 0 if active, otherwise 1
         *     $ wp theme is-active twentyfifteen
         *     $ echo $?
         *     1
         *
         * @subcommand is-active
         */
        public function is_active($args, $assoc_args = array())
        {
        }
        /**
         * Deletes one or more themes.
         *
         * Removes the theme or themes from the filesystem.
         *
         * ## OPTIONS
         *
         * [<theme>...]
         * : One or more themes to delete.
         *
         * [--all]
         * : If set, all themes will be deleted except active theme.
         *
         * [--force]
         * : To delete active theme use this.
         *
         * ## EXAMPLES
         *
         *     $ wp theme delete twentytwelve
         *     Deleted 'twentytwelve' theme.
         *     Success: Deleted 1 of 1 themes.
         *
         * @alias uninstall
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Gets a list of themes.
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : Filter results based on the value of a field.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each theme.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * [--status=<status>]
         * : Filter the output by theme status.
         * ---
         * options:
         *   - active
         *   - parent
         *   - inactive
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each theme:
         *
         * * name
         * * status
         * * update
         * * version
         *
         * These fields are optionally available:
         *
         * * update_version
         * * update_package
         * * update_id
         * * title
         * * description
         *
         * ## EXAMPLES
         *
         *     # List themes
         *     $ wp theme list --status=inactive --format=csv
         *     name,status,update,version
         *     twentyfourteen,inactive,none,1.7
         *     twentysixteen,inactive,available,1.1
         *
         * @subcommand list
         */
        public function list_($_, $assoc_args)
        {
        }
        /**
         * If have optional args ([<theme>...]) and an all option, then check have something to do.
         *
         * @param array $args Passed-in arguments.
         * @param bool $all All flag.
         * @return array Same as $args if not all, otherwise all slugs.
         */
        private function check_optional_args_and_all($args, $all)
        {
        }
        /**
         * Gets the template path based on installation type.
         */
        private static function get_template_path($template)
        {
        }
        /**
         * Check if current version of the theme is higher than the one available at WP.org.
         *
         * @param string $slug Theme slug.
         * @param string $version Theme current version.
         *
         * @return bool|string
         */
        protected function is_theme_version_valid($slug, $version)
        {
        }
    }
    /**
     * Sets, gets, and removes theme mods.
     *
     * ## EXAMPLES
     *
     *     # Set the 'background_color' theme mod to '000000'.
     *     $ wp theme mod set background_color 000000
     *     Success: Theme mod background_color set to 000000
     *
     *     # Get single theme mod in JSON format.
     *     $ wp theme mod get background_color --format=json
     *     [{"key":"background_color","value":"dd3333"}]
     *
     *     # Remove all theme mods.
     *     $ wp theme mod remove --all
     *     Success: Theme mods removed.
     */
    class Theme_Mod_Command extends \WP_CLI_Command
    {
        private $fields = ['key', 'value'];
        /**
         * Gets one or more theme mods.
         *
         * ## OPTIONS
         *
         * [<mod>...]
         * : One or more mods to get.
         *
         * [--field=<field>]
         * : Returns the value of a single field.
         *
         * [--all]
         * : List all theme mods
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Get all theme mods.
         *     $ wp theme mod get --all
         *     +------------------+---------+
         *     | key              | value   |
         *     +------------------+---------+
         *     | background_color | dd3333  |
         *     | link_color       | #dd9933 |
         *     | main_text_color  | #8224e3 |
         *     +------------------+---------+
         *
         *     # Get single theme mod in JSON format.
         *     $ wp theme mod get background_color --format=json
         *     [{"key":"background_color","value":"dd3333"}]
         *
         *     # Get value of a single theme mod.
         *     $ wp theme mod get background_color --field=value
         *     dd3333
         *
         *     # Get multiple theme mods.
         *     $ wp theme mod get background_color header_textcolor
         *     +------------------+--------+
         *     | key              | value  |
         *     +------------------+--------+
         *     | background_color | dd3333 |
         *     | header_textcolor |        |
         *     +------------------+--------+
         */
        public function get($args = array(), $assoc_args = array())
        {
        }
        /**
         * Gets a list of theme mods.
         *
         * ## OPTIONS
         *
         * [--field=<field>]
         * : Returns the value of a single field.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Gets a list of theme mods.
         *     $ wp theme mod list
         *     +------------------+---------+
         *     | key              | value   |
         *     +------------------+---------+
         *     | background_color | dd3333  |
         *     | link_color       | #dd9933 |
         *     | main_text_color  | #8224e3 |
         *     +------------------+---------+
         *
         * @subcommand list
         */
        public function list_($args = array(), $assoc_args = array())
        {
        }
        /**
         * Removes one or more theme mods.
         *
         * ## OPTIONS
         *
         * [<mod>...]
         * : One or more mods to remove.
         *
         * [--all]
         * : Remove all theme mods.
         *
         * ## EXAMPLES
         *
         *     # Remove all theme mods.
         *     $ wp theme mod remove --all
         *     Success: Theme mods removed.
         *
         *     # Remove single theme mod.
         *     $ wp theme mod remove background_color
         *     Success: 1 mod removed.
         *
         *     # Remove multiple theme mods.
         *     $ wp theme mod remove background_color header_textcolor
         *     Success: 2 mods removed.
         */
        public function remove($args = array(), $assoc_args = array())
        {
        }
        /**
         * Sets the value of a theme mod.
         *
         * ## OPTIONS
         *
         * <mod>
         * : The name of the theme mod to set or update.
         *
         * <value>
         * : The new value.
         *
         * ## EXAMPLES
         *
         *     # Set theme mod
         *     $ wp theme mod set background_color 000000
         *     Success: Theme mod background_color set to 000000
         */
        public function set($args = array(), $assoc_args = array())
        {
        }
    }
}
namespace WP_CLI {
    /**
     * A plugin upgrader class that clears the destination directory.
     */
    class DestructivePluginUpgrader extends \Plugin_Upgrader
    {
        public function install_package($args = array())
        {
        }
    }
    /**
     * A theme upgrader class that clears the destination directory.
     */
    class DestructiveThemeUpgrader extends \Theme_Upgrader
    {
        public function install_package($args = array())
        {
        }
    }
}
namespace WP_CLI\Fetchers {
    /**
     * Fetch a WordPress plugin based on one of its attributes.
     */
    class Plugin extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = "The '%s' plugin could not be found.";
        /**
         * Get a plugin object by name
         *
         * @param string $name
         * @return object|false
         */
        public function get($name)
        {
        }
    }
    /**
     * Fetch a WordPress theme based on one of its attributes.
     */
    class Theme extends \WP_CLI\Fetchers\Base
    {
        /**
         * @var string $msg Error message to use when invalid data is provided
         */
        protected $msg = "The '%s' theme could not be found.";
        /**
         * Get a theme object by name
         *
         * @param string $name
         * @return object|false
         */
        public function get($name)
        {
        }
        /**
         * Find and return the key in $existing_themes that matches $name with
         * a case insensitive string comparison.
         *
         * @param string $name Name of theme received by command.
         * @param array  $existing_themes Key/value pair of existing themes, key is
         *                                a case sensitive name.
         * @return string|boolean Case sensitive name if match found, otherwise false.
         */
        private function find_inexact_match($name, $existing_themes)
        {
        }
    }
}
namespace WP_CLI\I18n {
    trait IterableCodeExtractor
    {
        private static $dir = '';
        /**
         * Extract the translations from a file.
         *
         * @param array|string $file_or_files A path of a file or files
         * @param Translations $translations  The translations instance to append the new translations.
         * @param array        $options      {
         *     Optional. An array of options passed down to static::fromString()
         *
         *     @type bool  $wpExtractTemplates Extract 'Template Name' headers in theme files. Default 'false'.
         *     @type array $restrictFileNames  Skip all files which are not included in this array.
         * }
         * @return null
         */
        public static function fromFile($file_or_files, \Gettext\Translations $translations, array $options = [])
        {
        }
        /**
         * Extract the translations from a file.
         *
         * @param string $dir                Root path to start the recursive traversal in.
         * @param Translations $translations The translations instance to append the new translations.
         * @param array        $options      {
         *     Optional. An array of options passed down to static::fromString()
         *
         *     @type bool $wpExtractTemplates Extract 'Template Name' headers in theme files. Default 'false'.
         *     @type array $exclude           A list of path to exclude. Default [].
         *     @type array $extensions        A list of extensions to process. Default [].
         * }
         * @return null
         */
        public static function fromDirectory($dir, \Gettext\Translations $translations, array $options = [])
        {
        }
        /**
         * Determines whether a file is valid based on given matchers.
         *
         * @param SplFileInfo $file     File or directory.
         * @param array       $matchers List of files and directories to match.
         * @return int How strongly the file is matched.
         */
        protected static function calculateMatchScore(\SplFileInfo $file, array $matchers = [])
        {
        }
        /**
         * Determines whether or not a directory has children that may be matched.
         *
         * @param SplFileInfo $dir      Directory.
         * @param array       $matchers List of files and directories to match.
         * @return bool Whether or not there are any matchers for children of this directory.
         */
        protected static function containsMatchingChildren(\SplFileInfo $dir, array $matchers = [])
        {
        }
        /**
         * Recursively gets all PHP files within a directory.
         *
         * @param string $dir A path of a directory.
         * @param array $include List of files and directories to include.
         * @param array $exclude List of files and directories to skip.
         * @param array $extensions List of filename extensions to process.
         *
         * @return array File list.
         */
        public static function getFilesFromDirectory($dir, array $include = [], array $exclude = [], $extensions = [])
        {
        }
        /**
         * Trim leading slash from a path.
         *
         * @param string $path Path to trim.
         * @return string Trimmed path.
         */
        private static function trim_leading_slash($path)
        {
        }
    }
    final class BlockExtractor extends \Gettext\Extractors\Extractor implements \Gettext\Extractors\ExtractorInterface
    {
        use \WP_CLI\I18n\IterableCodeExtractor;
        /**
         * @inheritdoc
         */
        public static function fromString($string, \Gettext\Translations $translations, array $options = [])
        {
        }
    }
    /**
     * Provides internationalization tools for WordPress projects.
     *
     * ## EXAMPLES
     *
     *     # Create a POT file for the WordPress plugin/theme in the current directory
     *     $ wp i18n make-pot . languages/my-plugin.pot
     *
     * @when before_wp_load
     */
    class CommandNamespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
    /**
     * Jed file generator.
     *
     * Adds some more meta data to JED translation files than the default generator.
     */
    class JedGenerator extends \Gettext\Generators\Jed
    {
        /**
         * {@parentDoc}.
         */
        public static function toString(\Gettext\Translations $translations, array $options = [])
        {
        }
        /**
         * Generates an array with all translations.
         *
         * @param Translations $translations
         *
         * @return array
         */
        public static function buildMessages(\Gettext\Translations $translations)
        {
        }
    }
    final class JsCodeExtractor extends \Gettext\Extractors\JsCode
    {
        use \WP_CLI\I18n\IterableCodeExtractor;
        public static $options = ['extractComments' => ['translators', 'Translators'], 'constants' => [], 'functions' => ['__' => 'text_domain', '_x' => 'text_context_domain', '_n' => 'single_plural_number_domain', '_nx' => 'single_plural_number_context_domain']];
        protected static $functionsScannerClass = 'WP_CLI\\I18n\\JsFunctionsScanner';
        /**
         * @inheritdoc
         */
        public static function fromString($string, \Gettext\Translations $translations, array $options = [])
        {
        }
        /**
         * @inheritDoc
         */
        public static function fromStringMultiple($string, array $translations, array $options = [])
        {
        }
    }
    final class JsFunctionsScanner extends \Gettext\Utils\JsFunctionsScanner
    {
        /**
         * If not false, comments will be extracted.
         *
         * @var string|false|array
         */
        private $extract_comments = false;
        /**
         * Enable extracting comments that start with a tag (if $tag is empty all the comments will be extracted).
         *
         * @param mixed $tag
         */
        public function enableCommentsExtraction($tag = '')
        {
        }
        /**
         * Disable comments extraction.
         */
        public function disableCommentsExtraction()
        {
        }
        /**
         * {@inheritdoc}
         */
        public function saveGettextFunctions($translations, array $options)
        {
        }
        /**
         * Resolve the callee of a call expression using known formats.
         *
         * @param Node\CallExpression $node The call expression whose callee to resolve.
         *
         * @return array|bool Array containing the name and comments of the identifier if resolved. False if not.
         */
        private function resolveExpressionCallee(\Peast\Syntax\Node\CallExpression $node)
        {
        }
        /**
         * Returns wether or not a comment precedes a node.
         * The comment must be before the node and on the same line or the one before.
         *
         * @param Node\Comment $comment The comment.
         * @param Node\Node    $node    The node.
         *
         * @return bool Whether or not the comment precedes the node.
         */
        private function commentPrecedesNode(\Peast\Syntax\Node\Comment $comment, \Peast\Syntax\Node\Node $node)
        {
        }
    }
    class MakeJsonCommand extends \WP_CLI_Command
    {
        /**
         * Options passed to json_encode().
         *
         * @var int JSON options.
         */
        protected $json_options = 0;
        /**
         * Extract JavaScript strings from PO files and add them to individual JSON files.
         *
         * For JavaScript internationalization purposes, WordPress requires translations to be split up into
         * one Jed-formatted JSON file per JavaScript source file.
         *
         * See https://make.wordpress.org/core/2018/11/09/new-javascript-i18n-support-in-wordpress/ to learn more
         * about WordPress JavaScript internationalization.
         *
         * ## OPTIONS
         *
         * <source>
         * : Path to an existing PO file or a directory containing multiple PO files.
         *
         * [<destination>]
         * : Path to the destination directory for the resulting JSON files. Defaults to the source directory.
         *
         * [--purge]
         * : Whether to purge the strings that were extracted from the original source file. Defaults to true, use `--no-purge` to skip the removal.
         *
         * [--pretty-print]
         * : Pretty-print resulting JSON files.
         *
         * ## EXAMPLES
         *
         *     # Create JSON files for all PO files in the languages directory
         *     $ wp i18n make-json languages
         *
         *     # Create JSON files for my-plugin-de_DE.po and leave the PO file untouched.
         *     $ wp i18n make-json my-plugin-de_DE.po /tmp --no-purge
         *
         * @when before_wp_load
         *
         * @throws WP_CLI\ExitException
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Splits a single PO file into multiple JSON files.
         *
         * @param string $source_file Path to the source file.
         * @param string $destination Path to the destination directory.
         * @return array List of created JSON files.
         */
        protected function make_json($source_file, $destination)
        {
        }
        /**
         * Builds a mapping of JS file names to translation entries.
         *
         * Exports translations for each JS file to a separate translation file.
         *
         * @param array  $mapping        A mapping of files to translation entries.
         * @param string $base_file_name Base file name for JSON files.
         * @param string $destination    Path to the destination directory.
         *
         * @return array List of created JSON files.
         */
        protected function build_json_files($mapping, $base_file_name, $destination)
        {
        }
        /**
         * Removes strings from PO file that only occur in JavaScript file.
         *
         * @param string $source_file Path to the PO file.
         * @return bool True on success, false otherwise.
         */
        protected function remove_js_strings_from_po_file($source_file)
        {
        }
    }
    class MakeMoCommand extends \WP_CLI_Command
    {
        /**
         * Create MO files from PO files.
         *
         * ## OPTIONS
         *
         * <source>
         * : Path to an existing PO file or a directory containing multiple PO files.
         *
         * [<destination>]
         * : Path to the destination directory for the resulting MO files. Defaults to the source directory.
         *
         * @when before_wp_load
         *
         * @throws WP_CLI\ExitException
         */
        public function __invoke($args, $assoc_args)
        {
        }
    }
    class MakePotCommand extends \WP_CLI_Command
    {
        /**
         * @var string
         */
        protected $source;
        /**
         * @var string
         */
        protected $destination;
        /**
         * @var array
         */
        protected $merge = [];
        /**
         * @var Translations
         */
        protected $exceptions;
        /**
         * @var array
         */
        protected $include = [];
        /**
         * @var array
         */
        protected $exclude = ['node_modules', '.git', '.svn', '.CVS', '.hg', 'vendor', 'Gruntfile.js', 'webpack.config.js', '*.min.js'];
        /**
         * @var string
         */
        protected $slug;
        /**
         * @var array
         */
        protected $main_file_data = [];
        /**
         * @var bool
         */
        protected $skip_js = false;
        /**
         * @var bool
         */
        protected $skip_php = false;
        /**
         * @var bool
         */
        protected $skip_block_json = false;
        /**
         * @var bool
         */
        protected $skip_audit = false;
        /**
         * @var array
         */
        protected $headers = [];
        /**
         * @var string
         */
        protected $domain;
        /**
         * @var string
         */
        protected $package_name;
        /**
         * @var string
         */
        protected $file_comment;
        /**
         * @var string
         */
        protected $project_type = 'generic';
        /**
         * These Regexes copied from http://php.net/manual/en/function.sprintf.php#93552
         * and adjusted for better precision and updated specs.
         */
        const SPRINTF_PLACEHOLDER_REGEX = '/(?:
		(?<!%)                     # Don\'t match a literal % (%%).
		(
			%                          # Start of placeholder.
			(?:[0-9]+\\$)?              # Optional ordering of the placeholders.
			[+-]?                      # Optional sign specifier.
			(?:
				(?:0|\'.)?                 # Optional padding specifier - excluding the space.
				-?                         # Optional alignment specifier.
				[0-9]*                     # Optional width specifier.
				(?:\\.(?:[ 0]|\'.)?[0-9]+)? # Optional precision specifier with optional padding character.
				|                      # Only recognize the space as padding in combination with a width specifier.
				(?:[ ])?                   # Optional space padding specifier.
				-?                         # Optional alignment specifier.
				[0-9]+                     # Width specifier.
				(?:\\.(?:[ 0]|\'.)?[0-9]+)? # Optional precision specifier with optional padding character.
			)
			[bcdeEfFgGosuxX]           # Type specifier.
		)
	)/x';
        /**
         * "Unordered" means there's no position specifier: '%s', not '%2$s'.
         */
        const UNORDERED_SPRINTF_PLACEHOLDER_REGEX = '/(?:
		(?<!%)                     # Don\'t match a literal % (%%).
		%                          # Start of placeholder.
		[+-]?                      # Optional sign specifier.
		(?:
			(?:0|\'.)?                 # Optional padding specifier - excluding the space.
			-?                         # Optional alignment specifier.
			[0-9]*                     # Optional width specifier.
			(?:\\.(?:[ 0]|\'.)?[0-9]+)? # Optional precision specifier with optional padding character.
			|                      # Only recognize the space as padding in combination with a width specifier.
			(?:[ ])?                   # Optional space padding specifier.
			-?                         # Optional alignment specifier.
			[0-9]+                     # Width specifier.
			(?:\\.(?:[ 0]|\'.)?[0-9]+)? # Optional precision specifier with optional padding character.
		)
		[bcdeEfFgGosuxX]           # Type specifier.
	)/x';
        /**
         * Create a POT file for a WordPress project.
         *
         * Scans PHP and JavaScript files for translatable strings, as well as theme stylesheets and plugin files
         * if the source directory is detected as either a plugin or theme.
         *
         * ## OPTIONS
         *
         * <source>
         * : Directory to scan for string extraction.
         *
         * [<destination>]
         * : Name of the resulting POT file.
         *
         * [--slug=<slug>]
         * : Plugin or theme slug. Defaults to the source directory's basename.
         *
         * [--domain=<domain>]
         * : Text domain to look for in the source code, unless the `--ignore-domain` option is used.
         * By default, the "Text Domain" header of the plugin or theme is used.
         * If none is provided, it falls back to the project slug.
         *
         * [--ignore-domain]
         * : Ignore the text domain completely and extract strings with any text domain.
         *
         * [--merge[=<paths>]]
         * : Comma-separated list of POT files whose contents should be merged with the extracted strings.
         * If left empty, defaults to the destination POT file. POT file headers will be ignored.
         *
         * [--subtract=<paths>]
         * : Comma-separated list of POT files whose contents should act as some sort of blacklist for string extraction.
         * Any string which is found on that blacklist will not be extracted.
         * This can be useful when you want to create multiple POT files from the same source directory with slightly
         * different content and no duplicate strings between them.
         *
         * [--include=<paths>]
         * : Comma-separated list of files and paths that should be used for string extraction.
         * If provided, only these files and folders will be taken into account for string extraction.
         * For example, `--include="src,my-file.php` will ignore anything besides `my-file.php` and files in the `src`
         * directory. Simple glob patterns can be used, i.e. `--include=foo-*.php` includes any PHP file with the `foo-`
         * prefix. Leading and trailing slashes are ignored, i.e. `/my/directory/` is the same as `my/directory`.
         *
         * [--exclude=<paths>]
         * : Comma-separated list of files and paths that should be skipped for string extraction.
         * For example, `--exclude=".github,myfile.php` would ignore any strings found within `myfile.php` or the `.github`
         * folder. Simple glob patterns can be used, i.e. `--exclude=foo-*.php` excludes any PHP file with the `foo-`
         * prefix. Leading and trailing slashes are ignored, i.e. `/my/directory/` is the same as `my/directory`. The
         * following files and folders are always excluded: node_modules, .git, .svn, .CVS, .hg, vendor, *.min.js.
         *
         * [--headers=<headers>]
         * : Array in JSON format of custom headers which will be added to the POT file. Defaults to empty array.
         *
         * [--skip-js]
         * : Skips JavaScript string extraction. Useful when this is done in another build step, e.g. through Babel.
         *
         * [--skip-php]
         * : Skips PHP string extraction.
         *
         * [--skip-block-json]
         * : Skips string extraction from block.json files.
         *
         * [--skip-audit]
         * : Skips string audit where it tries to find possible mistakes in translatable strings. Useful when running in an
         * automated environment.
         *
         * [--file-comment=<file-comment>]
         * : String that should be added as a comment to the top of the resulting POT file.
         * By default, a copyright comment is added for WordPress plugins and themes in the following manner:
         *
         *      ```
         *      Copyright (C) 2018 Example Plugin Author
         *      This file is distributed under the same license as the Example Plugin package.
         *      ```
         *
         *      If a plugin or theme specifies a license in their main plugin file or stylesheet, the comment looks like
         *      this:
         *
         *      ```
         *      Copyright (C) 2018 Example Plugin Author
         *      This file is distributed under the GPLv2.
         *      ```
         *
         * [--package-name=<name>]
         * : Name to use for package name in the resulting POT file's `Project-Id-Version` header.
         * Overrides plugin or theme name, if applicable.
         *
         * ## EXAMPLES
         *
         *     # Create a POT file for the WordPress plugin/theme in the current directory
         *     $ wp i18n make-pot . languages/my-plugin.pot
         *
         *     # Create a POT file for the continents and cities list in WordPress core.
         *     $ wp i18n make-pot . continents-and-cities.pot --include="wp-admin/includes/continents-cities.php"
         *     --ignore-domain
         *
         * @when before_wp_load
         *
         * @throws WP_CLI\ExitException
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Process arguments from command-line in a reusable way.
         *
         * @throws WP_CLI\ExitException
         *
         * @param array $args       Command arguments.
         * @param array $assoc_args Associative arguments.
         */
        public function handle_arguments($args, $assoc_args)
        {
        }
        /**
         * Removes leading and trailing slashes of a string.
         *
         * @param string $string What to add and remove slashes from.
         * @return string String without leading and trailing slashes.
         */
        protected function unslashit($string)
        {
        }
        /**
         * Retrieves the main file data of the plugin or theme.
         *
         * @return array
         */
        protected function get_main_file_data()
        {
        }
        /**
         * Returns the file headers for themes and plugins.
         *
         * @param string $type Source type, either theme or plugin.
         *
         * @return array List of file headers.
         */
        protected function get_file_headers($type)
        {
        }
        /**
         * Creates a POT file and stores it on disk.
         *
         * @throws WP_CLI\ExitException
         *
         * @return Translations A Translation set.
         */
        protected function extract_strings()
        {
        }
        /**
         * Audits strings.
         *
         * Goes through all extracted strings to find possible mistakes.
         *
         * @param Translations $translations Translations object.
         */
        protected function audit_strings($translations)
        {
        }
        /**
         * Returns the copyright comment for the given package.
         *
         * @return string File comment.
         */
        protected function get_file_comment()
        {
        }
        /**
         * Sets default POT file headers for the project.
         *
         * @param Translations $translations Translations object.
         */
        protected function set_default_headers($translations)
        {
        }
        /**
         * Extracts the WordPress version number from wp-includes/version.php.
         *
         * @return string|false Version number on success, false otherwise.
         */
        protected function get_wp_version()
        {
        }
        /**
         * Retrieves metadata from a file.
         *
         * Searches for metadata in the first 8kiB of a file, such as a plugin or theme.
         * Each piece of metadata must be on its own line. Fields can not span multiple
         * lines, the value will get cut at the end of the first line.
         *
         * If the file data is not within that first 8kiB, then the author should correct
         * their plugin file and move the data headers to the top.
         *
         * @see get_file_data()
         *
         * @param string $file Path to the file.
         * @param array $headers List of headers, in the format array('HeaderKey' => 'Header Name').
         *
         * @return array Array of file headers in `HeaderKey => Header Value` format.
         */
        protected static function get_file_data($file, $headers)
        {
        }
        /**
         * Retrieves metadata from a string.
         *
         * @param string $string String to look for metadata in.
         * @param array $headers List of headers.
         *
         * @return array Array of file headers in `HeaderKey => Header Value` format.
         */
        public static function get_file_data_from_string($string, $headers)
        {
        }
        /**
         * Strip close comment and close php tags from file headers used by WP.
         *
         * @see _cleanup_header_comment()
         *
         * @param string $str Header comment to clean up.
         *
         * @return string
         */
        protected static function _cleanup_header_comment($str)
        {
        }
    }
    final class MapCodeExtractor extends \Gettext\Extractors\JsCode
    {
        use \WP_CLI\I18n\IterableCodeExtractor;
        public static $options = ['extractComments' => ['translators', 'Translators'], 'constants' => [], 'functions' => ['__' => 'text_domain', '_x' => 'text_context_domain', '_n' => 'single_plural_number_domain', '_nx' => 'single_plural_number_context_domain']];
        /**
         * {@inheritdoc}
         */
        public static function fromString($string, \Gettext\Translations $translations, array $options = [])
        {
        }
    }
    final class PhpCodeExtractor extends \Gettext\Extractors\PhpCode
    {
        use \WP_CLI\I18n\IterableCodeExtractor;
        public static $options = ['extractComments' => ['translators', 'Translators'], 'constants' => [], 'functions' => [
            '__' => 'text_domain',
            'esc_attr__' => 'text_domain',
            'esc_html__' => 'text_domain',
            'esc_xml__' => 'text_domain',
            '_e' => 'text_domain',
            'esc_attr_e' => 'text_domain',
            'esc_html_e' => 'text_domain',
            'esc_xml_e' => 'text_domain',
            '_x' => 'text_context_domain',
            '_ex' => 'text_context_domain',
            'esc_attr_x' => 'text_context_domain',
            'esc_html_x' => 'text_context_domain',
            'esc_xml_x' => 'text_context_domain',
            '_n' => 'single_plural_number_domain',
            '_nx' => 'single_plural_number_context_domain',
            '_n_noop' => 'single_plural_domain',
            '_nx_noop' => 'single_plural_context_domain',
            // Compat.
            '_' => 'gettext',
            // Same as 'text_domain'.
            // Deprecated.
            '_c' => 'text_domain',
            '_nc' => 'single_plural_number_domain',
            '__ngettext' => 'single_plural_number_domain',
            '__ngettext_noop' => 'single_plural_domain',
        ]];
        protected static $functionsScannerClass = 'WP_CLI\\I18n\\PhpFunctionsScanner';
        /**
         * {@inheritdoc}
         */
        public static function fromString($string, \Gettext\Translations $translations, array $options = [])
        {
        }
    }
    class PhpFunctionsScanner extends \Gettext\Utils\PhpFunctionsScanner
    {
        /**
         * {@inheritdoc}
         */
        public function saveGettextFunctions($translations, array $options)
        {
        }
    }
    /**
     * POT file generator.
     *
     * The only difference to the existing PO file generator is that this
     * adds some comments at the very beginning of the file.
     */
    class PotGenerator extends \Gettext\Generators\Po
    {
        protected static $comments_before_headers = [];
        /**
         * Text to include as a comment before the start of the PO contents
         *
         * Doesn't need to include # in the beginning of lines, these are added automatically.
         *
         * @param string $comment File comment.
         */
        public static function setCommentBeforeHeaders($comment)
        {
        }
        /**
         * {@parentDoc}.
         */
        public static function toString(\Gettext\Translations $translations, array $options = [])
        {
        }
        /**
         * Escapes and adds double quotes to a string.
         *
         * @param string $string Multiline string.
         *
         * @return string[]
         */
        protected static function multilineQuote($string)
        {
        }
        /**
         * Add one or more lines depending whether the string is multiline or not.
         *
         * @param array  &$lines Array lines should be added to.
         * @param string $name   Name of the line, e.g. msgstr or msgid_plural.
         * @param string $value  The line to add.
         */
        protected static function addLines(array &$lines, $name, $value)
        {
        }
    }
}
namespace {
    class Import_Command extends \WP_CLI_Command
    {
        public $processed_posts = array();
        /**
         * Imports content from a given WXR file.
         *
         * Provides a command line interface to the WordPress Importer plugin, for
         * performing data migrations.
         *
         * ## OPTIONS
         *
         * <file>...
         * : Path to one or more valid WXR files for importing. Directories are also accepted.
         *
         * --authors=<authors>
         * : How the author mapping should be handled. Options are 'create', 'mapping.csv', or 'skip'. The first will create any non-existent users from the WXR file. The second will read author mapping associations from a CSV, or create a CSV for editing if the file path doesn't exist. The CSV requires two columns, and a header row like "old_user_login,new_user_login". The last option will skip any author mapping.
         *
         * [--skip=<data-type>]
         * : Skip importing specific data. Supported options are: 'attachment' and 'image_resize' (skip time-consuming thumbnail generation).
         *
         * ## EXAMPLES
         *
         *     # Import content from a WXR file
         *     $ wp import example.wordpress.2016-06-21.xml --authors=create
         *     Starting the import process...
         *     Processing post #1 ("Hello world!") (post_type: post)
         *     -- 1 of 1
         *     -- Tue, 21 Jun 2016 05:31:12 +0000
         *     -- Imported post as post_id #1
         *     Success: Finished importing from 'example.wordpress.2016-06-21.xml' file.
         */
        public function __invoke($args, $assoc_args)
        {
        }
        /**
         * Imports a WXR file.
         */
        private function import_wxr($file, $args)
        {
        }
        public function filter_set_image_sizes($sizes)
        {
        }
        /**
         * Defines useful verbosity filters for the WXR importer.
         */
        private function add_wxr_filters()
        {
        }
        /**
         * Determines whether the requested importer is available.
         */
        private function is_importer_available()
        {
        }
        /**
         * Processes how the authors should be mapped
         *
         * @param string            $authors_arg      The `--author` argument originally passed to command
         * @param array             $author_data      An array of WP_User-esque author objects
         * @return array|WP_Error   $author_mapping   Author mapping array if successful, WP_Error if something bad happened
         */
        private function process_author_mapping($authors_arg, $author_data)
        {
        }
        /**
         * Reads an author mapping file.
         */
        private function read_author_mapping_file($file)
        {
        }
        /**
         * Creates an author mapping file, based on provided author data.
         *
         * @return WP_Error      The file was just now created, so some action needs to be taken
         */
        private function create_author_mapping_file($file, $author_data)
        {
        }
        /**
         * Creates users if they don't exist, and build an author mapping file.
         */
        private function create_authors_for_mapping($author_data)
        {
        }
        /**
         * Suggests a blog user based on the levenshtein distance.
         */
        private function suggest_user($author_user_login, $author_user_email = '')
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Base class for WP-CLI commands that deal with translations
     *
     * @package wp-cli
     */
    abstract class CommandWithTranslation extends \WP_CLI_Command
    {
        protected $obj_type;
        protected $obj_fields;
        /**
         * Callback to sort array by a 'language' key.
         */
        protected function sort_translations_callback($a, $b)
        {
        }
        /**
         * Updates installed languages for the current object type.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Get all updates available for all translations.
         *
         * @see wp_get_translation_updates()
         *
         * @return array
         */
        protected function get_translation_updates()
        {
        }
        /**
         * Download a language pack.
         *
         * @see wp_download_language_pack()
         *
         * @param string $download Language code to download.
         * @param string $slug Plugin or theme slug. Not used for core.
         * @return string|\WP_Error Returns the language code if successfully downloaded, or a WP_Error object on failure.
         */
        protected function download_language_pack($download, $slug = null)
        {
        }
        /**
         * Return a list of installed languages.
         *
         * @param string $slug Optional. Plugin or theme slug. Defaults to 'default' for core.
         *
         * @return array
         */
        protected function get_installed_languages($slug = 'default')
        {
        }
        /**
         * Return a list of all languages.
         *
         * @param string $slug Optional. Plugin or theme slug. Not used for core.
         *
         * @return array
         */
        protected function get_all_languages($slug = null)
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         * @return Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
    }
}
namespace {
    /**
     * Installs, activates, and manages core language packs.
     *
     * ## EXAMPLES
     *
     *     # Install the Dutch core language pack.
     *     $ wp language core install nl_NL
     *     Success: Language installed.
     *
     *     # Activate the Dutch core language pack.
     *     $ wp language core activate nl_NL
     *     Success: Language activated.
     *
     *     # Uninstall the Dutch core language pack.
     *     $ wp language core uninstall nl_NL
     *     Success: Language uninstalled.
     *
     *     # List installed core language packages.
     *     $ wp language core list --status=installed
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | language | english_name | native_name | status    | update    | updated             |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     */
    class Core_Language_Command extends \WP_CLI\CommandWithTranslation
    {
        protected $obj_type = 'core';
        protected $obj_fields = array('language', 'english_name', 'native_name', 'status', 'update', 'updated');
        /**
         * Lists all available languages.
         *
         * ## OPTIONS
         *
         * [--field=<field>]
         * : Display the value of a single field
         *
         * [--<field>=<value>]
         * : Filter results by key=value pairs.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each translation:
         *
         * * language
         * * english_name
         * * native_name
         * * status
         * * update
         * * updated
         *
         * ## EXAMPLES
         *
         *     # List language,english_name,status fields of available languages.
         *     $ wp language core list --fields=language,english_name,status
         *     +----------------+-------------------------+-------------+
         *     | language       | english_name            | status      |
         *     +----------------+-------------------------+-------------+
         *     | ar             | Arabic                  | uninstalled |
         *     | ary            | Moroccan Arabic         | uninstalled |
         *     | az             | Azerbaijani             | uninstalled |
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Checks if a given language is installed.
         *
         * Returns exit code 0 when installed, 1 when uninstalled.
         *
         * ## OPTIONS
         *
         * <language>
         * : The language code to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether the German language is installed; exit status 0 if installed, otherwise 1.
         *     $ wp language core is-installed de_DE
         *     $ echo $?
         *     1
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args = array())
        {
        }
        /**
         * Installs a given language.
         *
         * Downloads the language pack from WordPress.org.
         *
         * ## OPTIONS
         *
         * <language>...
         * : Language code to install.
         *
         * [--activate]
         * : If set, the language will be activated immediately after install.
         *
         * ## EXAMPLES
         *
         *     # Install the Japanese language.
         *     $ wp language core install ja
         *     Downloading translation from https://downloads.wordpress.org/translation/core/4.9.8/ja.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Translation updated successfully.
         *     Language 'ja' installed.
         *     Success: Installed 1 of 1 languages.
         *
         * @subcommand install
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Uninstalls a given language.
         *
         * ## OPTIONS
         *
         * <language>...
         * : Language code to uninstall.
         *
         * ## EXAMPLES
         *
         *     $ wp language core uninstall ja
         *     Success: Language uninstalled.
         *
         * @subcommand uninstall
         * @throws WP_CLI\ExitException
         */
        public function uninstall($args, $assoc_args)
        {
        }
        /**
         * Updates installed languages for core.
         *
         * ## OPTIONS
         *
         * [--dry-run]
         * : Preview which translations would be updated.
         *
         * ## EXAMPLES
         *
         *     $ wp language core update
         *     Updating 'Japanese' translation for WordPress 4.9.2...
         *     Downloading translation from https://downloads.wordpress.org/translation/core/4.9.2/ja.zip...
         *     Translation updated successfully.
         *     Success: Updated 1/1 translation.
         *
         * @subcommand update
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Activates a given language.
         *
         * ## OPTIONS
         *
         * <language>
         * : Language code to activate.
         *
         * ## EXAMPLES
         *
         *     $ wp language core activate ja
         *     Success: Language activated.
         *
         * @subcommand activate
         * @throws WP_CLI\ExitException
         */
        public function activate($args, $assoc_args)
        {
        }
        private function activate_language($language_code)
        {
        }
    }
    /**
     * Installs, activates, and manages language packs.
     *
     * ## EXAMPLES
     *
     *     # Install the Dutch core language pack.
     *     $ wp language core install nl_NL
     *     Success: Language installed.
     *
     *     # Activate the Dutch core language pack.
     *     $ wp language core activate nl_NL
     *     Success: Language activated.
     *
     *     # Install the Dutch language pack for Twenty Seventeen.
     *     $ wp language theme install twentyseventeen nl_NL
     *     Success: Language installed.
     *
     *     # Install the Dutch language pack for Akismet.
     *     $ wp language plugin install akismet nl_NL
     *     Success: Language installed.
     */
    class Language_Namespace extends \WP_CLI\Dispatcher\CommandNamespace
    {
    }
    /**
     * Installs, activates, and manages plugin language packs.
     *
     * ## EXAMPLES
     *
     *     # Install the Dutch plugin language pack.
     *     $ wp language plugin install hello-dolly nl_NL
     *     Success: Language installed.
     *
     *     # Uninstall the Dutch plugin language pack.
     *     $ wp language plugin uninstall hello-dolly nl_NL
     *     Success: Language uninstalled.
     *
     *     # List installed plugin language packages.
     *     $ wp language plugin list --status=installed
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | language | english_name | native_name | status    | update    | updated             |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     */
    class Plugin_Language_Command extends \WP_CLI\CommandWithTranslation
    {
        protected $obj_type = 'plugins';
        protected $obj_fields = array('plugin', 'language', 'english_name', 'native_name', 'status', 'update', 'updated');
        /**
         * Lists all available languages for one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to list languages for.
         *
         * [--all]
         * : If set, available languages for all plugins will be listed.
         *
         * [--field=<field>]
         * : Display the value of a single field.
         *
         * [--<field>=<value>]
         * : Filter results by key=value pairs.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each translation:
         *
         * * plugin
         * * language
         * * english_name
         * * native_name
         * * status
         * * update
         * * updated
         *
         * ## EXAMPLES
         *
         *     # List language,english_name,status fields of available languages.
         *     $ wp language plugin list --fields=language,english_name,status
         *     +----------------+-------------------------+-------------+
         *     | language       | english_name            | status      |
         *     +----------------+-------------------------+-------------+
         *     | ar             | Arabic                  | uninstalled |
         *     | ary            | Moroccan Arabic         | uninstalled |
         *     | az             | Azerbaijani             | uninstalled |
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Checks if a given language is installed.
         *
         * Returns exit code 0 when installed, 1 when uninstalled.
         *
         * ## OPTIONS
         *
         * <plugin>
         * : Plugin to check for.
         *
         * <language>...
         * : The language code to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether the German language is installed for Akismet; exit status 0 if installed, otherwise 1.
         *     $ wp language plugin is-installed akismet de_DE
         *     $ echo $?
         *     1
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args = array())
        {
        }
        /**
         * Installs a given language for a plugin.
         *
         * Downloads the language pack from WordPress.org.
         *
         * ## OPTIONS
         *
         * [<plugin>]
         * : Plugin to install language for.
         *
         * [--all]
         * : If set, languages for all plugins will be installed.
         *
         * <language>...
         * : Language code to install.
         *
         * [--format=<format>]
         * : Render output in a particular format. Used when installing languages for all plugins.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - summary
         * ---
         *
         * ## EXAMPLES
         *
         *     # Install the Japanese language for Akismet.
         *     $ wp language plugin install akismet ja
         *     Downloading translation from https://downloads.wordpress.org/translation/plugin/akismet/4.0.3/ja.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Translation updated successfully.
         *     Language 'ja' installed.
         *     Success: Installed 1 of 1 languages.
         *
         * @subcommand install
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Installs translations for a plugin.
         *
         * @param array $args       Runtime arguments.
         * @param array $assoc_args Runtime arguments.
         */
        private function install_one($args, $assoc_args)
        {
        }
        /**
         * Installs translations for all installed plugins.
         *
         * @param array $args       Runtime arguments.
         * @param array $assoc_args Runtime arguments.
         */
        private function install_many($args, $assoc_args)
        {
        }
        /**
         * Uninstalls a given language for a plugin.
         *
         * ## OPTIONS
         *
         * <plugin>
         * : Plugin to uninstall language for.
         *
         * <language>...
         * : Language code to uninstall.
         *
         * ## EXAMPLES
         *
         *     $ wp language plugin uninstall hello-dolly ja
         *     Success: Language uninstalled.
         *
         * @subcommand uninstall
         */
        public function uninstall($args, $assoc_args)
        {
        }
        /**
         * Updates installed languages for one or more plugins.
         *
         * ## OPTIONS
         *
         * [<plugin>...]
         * : One or more plugins to update languages for.
         *
         * [--all]
         * : If set, languages for all plugins will be updated.
         *
         * [--dry-run]
         * : Preview which translations would be updated.
         *
         * ## EXAMPLES
         *
         *     $ wp language plugin update --all
         *     Updating 'Japanese' translation for Akismet 3.1.11...
         *     Downloading translation from https://downloads.wordpress.org/translation/plugin/akismet/3.1.11/ja.zip...
         *     Translation updated successfully.
         *     Success: Updated 1/1 translation.
         *
         * @subcommand update
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Gets all available plugins.
         *
         * Uses the same filter core uses in plugins.php to determine which plugins
         * should be available to manage through the WP_Plugins_List_Table class.
         *
         * @return array
         */
        private function get_all_plugins()
        {
        }
    }
    class Site_Switch_Language_Command extends \WP_CLI\CommandWithTranslation
    {
        protected $obj_type = 'core';
        /**
         * Activates a given language.
         *
         * ## OPTIONS
         *
         * <language>
         * : Language code to activate.
         *
         * ## EXAMPLES
         *
         *     $ wp site switch-language ja
         *     Success: Language activated.
         *
         * @throws WP_CLI\ExitException
         */
        public function __invoke($args, $assoc_args)
        {
        }
    }
    /**
     * Installs, activates, and manages theme language packs.
     *
     * ## EXAMPLES
     *
     *     # Install the Dutch theme language pack.
     *     $ wp language theme install twentyten nl_NL
     *     Success: Language installed.
     *
     *     # Uninstall the Dutch theme language pack.
     *     $ wp language theme uninstall twentyten nl_NL
     *     Success: Language uninstalled.
     *
     *     # List installed theme language packages.
     *     $ wp language theme list --status=installed
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | language | english_name | native_name | status    | update    | updated             |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     *     | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
     *     +----------+--------------+-------------+-----------+-----------+---------------------+
     */
    class Theme_Language_Command extends \WP_CLI\CommandWithTranslation
    {
        protected $obj_type = 'themes';
        protected $obj_fields = array('theme', 'language', 'english_name', 'native_name', 'status', 'update', 'updated');
        /**
         * Lists all available languages for one or more themes.
         *
         * ## OPTIONS
         *
         * [<theme>...]
         * : One or more themes to list languages for.
         *
         * [--all]
         * : If set, available languages for all themes will be listed.
         *
         * [--field=<field>]
         * : Display the value of a single field.
         *
         * [--<field>=<value>]
         * : Filter results by key=value pairs.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each translation:
         *
         * * theme
         * * language
         * * english_name
         * * native_name
         * * status
         * * update
         * * updated
         *
         * ## EXAMPLES
         *
         *     # List language,english_name,status fields of available languages.
         *     $ wp language theme list --fields=language,english_name,status
         *     +----------------+-------------------------+-------------+
         *     | language       | english_name            | status      |
         *     +----------------+-------------------------+-------------+
         *     | ar             | Arabic                  | uninstalled |
         *     | ary            | Moroccan Arabic         | uninstalled |
         *     | az             | Azerbaijani             | uninstalled |
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Checks if a given language is installed.
         *
         * Returns exit code 0 when installed, 1 when uninstalled.
         *
         * ## OPTIONS
         *
         * <theme>
         * : Theme to check for.
         *
         * <language>...
         * : The language code to check.
         *
         * ## EXAMPLES
         *
         *     # Check whether the German language is installed for Twenty Seventeen; exit status 0 if installed, otherwise 1.
         *     $ wp language theme is-installed twentyseventeen de_DE
         *     $ echo $?
         *     1
         *
         * @subcommand is-installed
         */
        public function is_installed($args, $assoc_args = array())
        {
        }
        /**
         * Installs a given language for a theme.
         *
         * Downloads the language pack from WordPress.org.
         *
         * ## OPTIONS
         *
         * [<theme>]
         * : Theme to install language for.
         *
         * [--all]
         * : If set, languages for all themes will be installed.
         *
         * <language>...
         * : Language code to install.
         *
         * [--format=<format>]
         * : Render output in a particular format. Used when installing languages for all themes.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - summary
         * ---
         *
         * ## EXAMPLES
         *
         *     # Install the Japanese language for Twenty Seventeen.
         *     $ wp language theme install twentyseventeen ja
         *     Downloading translation from https://downloads.wordpress.org/translation/theme/twentyseventeen/1.3/ja.zip...
         *     Unpacking the update...
         *     Installing the latest version...
         *     Translation updated successfully.
         *     Language 'ja' installed.
         *     Success: Installed 1 of 1 languages.
         *
         * @subcommand install
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Installs translations for a theme.
         *
         * @param array $args       Runtime arguments.
         * @param array $assoc_args Runtime arguments.
         */
        private function install_one($args, $assoc_args)
        {
        }
        /**
         * Installs translations for all installed themes.
         *
         * @param array $args       Runtime arguments.
         * @param array $assoc_args Runtime arguments.
         */
        private function install_many($args, $assoc_args)
        {
        }
        /**
         * Uninstalls a given language for a theme.
         *
         * ## OPTIONS
         *
         * <theme>
         * : Theme to uninstall language for.
         *
         * <language>...
         * : Language code to uninstall.
         *
         * ## EXAMPLES
         *
         *     $ wp language theme uninstall twentyten ja
         *     Success: Language uninstalled.
         *
         * @subcommand uninstall
         */
        public function uninstall($args, $assoc_args)
        {
        }
        /**
         * Updates installed languages for one or more themes.
         *
         * ## OPTIONS
         *
         * [<theme>...]
         * : One or more themes to update languages for.
         *
         * [--all]
         * : If set, languages for all themes will be updated.
         *
         * [--dry-run]
         * : Preview which translations would be updated.
         *
         * ## EXAMPLES
         *
         *     $ wp language theme update --all
         *     Updating 'Japanese' translation for Twenty Fifteen 1.5...
         *     Downloading translation from https://downloads.wordpress.org/translation/theme/twentyfifteen/1.5/ja.zip...
         *     Translation updated successfully.
         *     Success: Updated 1/1 translation.
         *
         * @subcommand update
         */
        public function update($args, $assoc_args)
        {
        }
    }
}
namespace WP_CLI {
    /**
     * A Language Pack Upgrader class that caches the download, and uses cached if available
     *
     * @package wp-cli
     */
    class LanguagePackUpgrader extends \Language_Pack_Upgrader
    {
        /**
         * Initialize the upgrade strings.
         *
         * Makes sure that the strings are always in English.
         */
        public function upgrade_strings()
        {
        }
        /**
         * Initialize the generic strings.
         *
         * Makes sure that the strings are always in English.
         */
        public function generic_strings()
        {
        }
        /**
         * Caches the download, and uses cached if available.
         *
         * @param string $package          The URI of the package. If this is the full path to an
         *                                 existing local file, it will be returned untouched.
         * @param bool   $check_signatures Whether to validate file signatures. Default false.
         * @return string|\WP_Error The full path to the downloaded package file, or a WP_Error object.
         */
        public function download_package($package, $check_signatures = false)
        {
        }
    }
}
namespace WP_CLI\MaintenanceMode {
    /**
     * Activates, deactivates or checks the status of the maintenance mode of a site.
     *
     * ## EXAMPLES
     *
     *     # Activate Maintenance mode.
     *     $ wp maintenance-mode activate
     *     Enabling Maintenance mode...
     *     Success: Activated Maintenance mode.
     *
     *     # Deactivate Maintenance mode.
     *     $ wp maintenance-mode deactivate
     *     Disabling Maintenance mode...
     *     Success: Deactivated Maintenance mode.
     *
     *     # Display Maintenance mode status.
     *     $ wp maintenance-mode status
     *     Maintenance mode is active.
     *
     *     # Get Maintenance mode status for scripting purpose.
     *     $ wp maintenance-mode is-active
     *     $ echo $?
     *     1
     *
     * @when    after_wp_load
     * @package wp-cli
     */
    class MaintenanceModeCommand extends \WP_CLI_Command
    {
        /**
         * Instance of WP_Upgrader.
         *
         * @var WP_Upgrader
         */
        private $upgrader;
        /**
         * Instantiate a MaintenanceModeCommand object.
         */
        public function __construct()
        {
        }
        /**
         * Activates maintenance mode.
         *
         * [--force]
         * : Force maintenance mode activation operation.
         *
         * ## EXAMPLES
         *
         *     $ wp maintenance-mode activate
         *     Enabling Maintenance mode...
         *     Success: Activated Maintenance mode.
         */
        public function activate($_, $assoc_args)
        {
        }
        /**
         * Deactivates maintenance mode.
         *
         * ## EXAMPLES
         *
         *     $ wp maintenance-mode deactivate
         *     Disabling Maintenance mode...
         *     Success: Deactivated Maintenance mode.
         */
        public function deactivate()
        {
        }
        /**
         * Displays maintenance mode status.
         *
         * ## EXAMPLES
         *
         *     $ wp maintenance-mode status
         *     Maintenance mode is active.
         */
        public function status()
        {
        }
        /**
         * Detects maintenance mode status.
         *
         * ## EXAMPLES
         *
         *     $ wp maintenance-mode is-active
         *     $ echo $?
         *     1
         *
         * @subcommand is-active
         */
        public function is_active()
        {
        }
        /**
         * Returns status of maintenance mode.
         *
         * @return bool
         */
        private function get_maintenance_mode_status()
        {
        }
        /**
         * Initializes WP_Filesystem.
         *
         * @return WP_Filesystem_Base
         */
        protected function init_wp_filesystem()
        {
        }
    }
}
namespace {
    /**
     * Imports files as attachments, regenerates thumbnails, or lists registered image sizes.
     *
     * ## EXAMPLES
     *
     *     # Re-generate all thumbnails, without confirmation.
     *     $ wp media regenerate --yes
     *     Found 3 images to regenerate.
     *     1/3 Regenerated thumbnails for "Sydney Harbor Bridge" (ID 760).
     *     2/3 Regenerated thumbnails for "Boardwalk" (ID 757).
     *     3/3 Regenerated thumbnails for "Sunburst Over River" (ID 756).
     *     Success: Regenerated 3 of 3 images.
     *
     *     # Import a local image and set it to be the featured image for a post.
     *     $ wp media import ~/Downloads/image.png --post_id=123 --title="A downloaded picture" --featured_image
     *     Success: Imported file '/home/person/Downloads/image.png' as attachment ID 1753 and attached to post 123 as featured image.
     *
     *     # List all registered image sizes
     *     $ wp media image-size
     *     +---------------------------+-------+--------+-------+
     *     | name                      | width | height | crop  |
     *     +---------------------------+-------+--------+-------+
     *     | full                      |       |        | N/A   |
     *     | twentyfourteen-full-width | 1038  | 576    | hard  |
     *     | large                     | 1024  | 1024   | soft  |
     *     | medium_large              | 768   | 0      | soft  |
     *     | medium                    | 300   | 300    | soft  |
     *     | thumbnail                 | 150   | 150    | hard  |
     *     +---------------------------+-------+--------+-------+
     *
     * @package wp-cli
     */
    class Media_Command extends \WP_CLI_Command
    {
        /**
         * Clear the WP object cache after this many regenerations/imports.
         *
         * @var integer
         */
        const WP_CLEAR_OBJECT_CACHE_INTERVAL = 500;
        /**
         * Regenerates thumbnails for one or more attachments.
         *
         * ## OPTIONS
         *
         * [<attachment-id>...]
         * : One or more IDs of the attachments to regenerate.
         *
         * [--image_size=<image_size>]
         * : Name of the image size to regenerate. Only thumbnails of this image size will be regenerated, thumbnails of other image sizes will not.
         *
         * [--skip-delete]
         * : Skip deletion of the original thumbnails. If your thumbnails are linked from sources outside your control, it's likely best to leave them around. Defaults to false.
         *
         * [--only-missing]
         * : Only generate thumbnails for images missing image sizes.
         *
         * [--yes]
         * : Answer yes to the confirmation message. Confirmation only shows when no IDs passed as arguments.
         *
         * ## EXAMPLES
         *
         *     # Regenerate thumbnails for given attachment IDs.
         *     $ wp media regenerate 123 124 125
         *     Found 3 images to regenerate.
         *     1/3 Regenerated thumbnails for "Vertical Image" (ID 123).
         *     2/3 Regenerated thumbnails for "Horizontal Image" (ID 124).
         *     3/3 Regenerated thumbnails for "Beautiful Picture" (ID 125).
         *     Success: Regenerated 3 of 3 images.
         *
         *     # Regenerate all thumbnails, without confirmation.
         *     $ wp media regenerate --yes
         *     Found 3 images to regenerate.
         *     1/3 Regenerated thumbnails for "Sydney Harbor Bridge" (ID 760).
         *     2/3 Regenerated thumbnails for "Boardwalk" (ID 757).
         *     3/3 Regenerated thumbnails for "Sunburst Over River" (ID 756).
         *     Success: Regenerated 3 of 3 images.
         *
         *     # Re-generate all thumbnails that have IDs between 1000 and 2000.
         *     $ seq 1000 2000 | xargs wp media regenerate
         *     Found 4 images to regenerate.
         *     1/4 Regenerated thumbnails for "Vertical Featured Image" (ID 1027).
         *     2/4 Regenerated thumbnails for "Horizontal Featured Image" (ID 1022).
         *     3/4 Regenerated thumbnails for "Unicorn Wallpaper" (ID 1045).
         *     4/4 Regenerated thumbnails for "I Am Worth Loving Wallpaper" (ID 1023).
         *     Success: Regenerated 4 of 4 images.
         *
         *     # Re-generate only the thumbnails of "large" image size for all images.
         *     $ wp media regenerate --image_size=large
         *     Do you really want to regenerate the "large" image size for all images? [y/n] y
         *     Found 3 images to regenerate.
         *     1/3 Regenerated "large" thumbnail for "Sydney Harbor Bridge" (ID 760).
         *     2/3 No "large" thumbnail regeneration needed for "Boardwalk" (ID 757).
         *     3/3 Regenerated "large" thumbnail for "Sunburst Over River" (ID 756).
         *     Success: Regenerated 3 of 3 images.
         */
        public function regenerate($args, $assoc_args = array())
        {
        }
        /**
         * Creates attachments from local files or URLs.
         *
         * ## OPTIONS
         *
         * <file>...
         * : Path to file or files to be imported. Supports the glob(3) capabilities of the current shell.
         *     If file is recognized as a URL (for example, with a scheme of http or ftp), the file will be
         *     downloaded to a temp file before being sideloaded.
         *
         * [--post_id=<post_id>]
         * : ID of the post to attach the imported files to.
         *
         * [--title=<title>]
         * : Attachment title (post title field).
         *
         * [--caption=<caption>]
         * : Caption for attachent (post excerpt field).
         *
         * [--alt=<alt_text>]
         * : Alt text for image (saved as post meta).
         *
         * [--desc=<description>]
         * : "Description" field (post content) of attachment post.
         *
         * [--skip-copy]
         * : If set, media files (local only) are imported to the library but not moved on disk.
         * File names will not be run through wp_unique_filename() with this set.
         *
         * [--preserve-filetime]
         * : Use the file modified time as the post published & modified dates.
         * Remote files will always use the current time.
         *
         * [--featured_image]
         * : If set, set the imported image as the Featured Image of the post its attached to.
         *
         * [--porcelain]
         * : Output just the new attachment ID.
         *
         * ## EXAMPLES
         *
         *     # Import all jpgs in the current user's "Pictures" directory, not attached to any post.
         *     $ wp media import ~/Pictures/**\/*.jpg
         *     Imported file '/home/person/Pictures/landscape-photo.jpg' as attachment ID 1751.
         *     Imported file '/home/person/Pictures/fashion-icon.jpg' as attachment ID 1752.
         *     Success: Imported 2 of 2 items.
         *
         *     # Import a local image and set it to be the post thumbnail for a post.
         *     $ wp media import ~/Downloads/image.png --post_id=123 --title="A downloaded picture" --featured_image
         *     Imported file '/home/person/Downloads/image.png' as attachment ID 1753 and attached to post 123 as featured image.
         *     Success: Imported 1 of 1 images.
         *
         *     # Import a local image, but set it as the featured image for all posts.
         *     # 1. Import the image and get its attachment ID.
         *     # 2. Assign the attachment ID as the featured image for all posts.
         *     $ ATTACHMENT_ID="$(wp media import ~/Downloads/image.png --porcelain)"
         *     $ wp post list --post_type=post --format=ids | xargs -d ' ' -I % wp post meta add % _thumbnail_id $ATTACHMENT_ID
         *     Success: Added custom field.
         *     Success: Added custom field.
         *
         *     # Import an image from the web.
         *     $ wp media import http://s.wordpress.org/style/images/wp-header-logo.png --title='The WordPress logo' --alt="Semantic personal publishing"
         *     Imported file 'http://s.wordpress.org/style/images/wp-header-logo.png' as attachment ID 1755.
         *     Success: Imported 1 of 1 images.
         *
         *     # Get the URL for an attachment after import.
         *     $ wp media import http://s.wordpress.org/style/images/wp-header-logo.png --porcelain | xargs -I {} wp post list --post__in={} --field=url --post_type=attachment
         *     http://wordpress-develop.dev/wp-header-logo/
         */
        public function import($args, $assoc_args = array())
        {
        }
        /**
         * Lists image sizes registered with WordPress.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a specific format
         * ---
         * default: table
         * options:
         *   - table
         *   - json
         *   - csv
         *   - yaml
         *   - count
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each image size:
         * * name
         * * width
         * * height
         * * crop
         * * ratio
         *
         * ## EXAMPLES
         *
         *     # List all registered image sizes
         *     $ wp media image-size
         *     +---------------------------+-------+--------+-------+-------+
         *     | name                      | width | height | crop  | ratio |
         *     +---------------------------+-------+--------+-------+-------+
         *     | full                      |       |        | N/A   | N/A   |
         *     | twentyfourteen-full-width | 1038  | 576    | hard  | 173:96|
         *     | large                     | 1024  | 1024   | soft  | N/A   |
         *     | medium_large              | 768   | 0      | soft  | N/A   |
         *     | medium                    | 300   | 300    | soft  | N/A   |
         *     | thumbnail                 | 150   | 150    | hard  | 1:1   |
         *     +---------------------------+-------+--------+-------+-------+
         *
         * @subcommand image-size
         */
        public function image_size($args, $assoc_args)
        {
        }
        private function get_ratio($width, $height)
        {
        }
        private function gcd($num1, $num2)
        {
        }
        // wp_tempnam() inexplicably forces a .tmp extension, which spoils MIME type detection
        private function make_copy($path)
        {
        }
        private function process_regeneration($id, $skip_delete, $only_missing, $image_size, $progress, &$successes, &$errors, &$skips)
        {
        }
        private function remove_old_images($metadata, $fullsizepath, $image_size)
        {
        }
        private function needs_regeneration($att_id, $fullsizepath, $is_pdf, $image_size, $skip_delete, &$skip_it)
        {
        }
        // Whether there's new image sizes or the width/height of existing image sizes have changed.
        private function image_sizes_differ($image_sizes, $meta_sizes)
        {
        }
        // Like WP's get_intermediate_image_sizes(), but removes sizes that won't be generated for a particular attachment due to its being on or below their thresholds,
        // and returns associative array with size name => width/height entries, resolved to crop values if applicable.
        private function get_intermediate_image_sizes_for_attachment($fullsizepath, $is_pdf, $metadata)
        {
        }
        // Like WP's get_intermediate_image_sizes(), but returns associative array with name => size info entries (and caters for PDFs also).
        private function get_intermediate_sizes($is_pdf, $metadata)
        {
        }
        // Add filters to only process a particular intermediate image size in wp_generate_attachment_metadata().
        private function add_image_size_filters($image_size)
        {
        }
        // Remove above intermediate image size filters.
        private function remove_image_size_filters($image_size_filters)
        {
        }
        // Update attachment sizes metadata just for a particular intermediate image size.
        private function update_attachment_metadata_for_image_size($id, $new_metadata, $image_size)
        {
        }
        /**
         * Get images from the installation.
         *
         * @param array $args                  The query arguments to use. Optional.
         * @param array $additional_mime_types The additional mime types to search for. Optional.
         *
         * @return WP_Query The query result.
         */
        private function get_images($args = array(), $additional_mime_types = array())
        {
        }
        /**
         * Get the metadata for the passed intermediate image size.
         *
         * @param string $size The image size to get the metadata for.
         *
         * @return array The image size metadata.
         */
        private function get_intermediate_size_metadata($size)
        {
        }
        /**
         * Get all the registered image sizes along with their dimensions.
         *
         * @global array $_wp_additional_image_sizes The additional image sizes to parse.
         *
         * @link https://wordpress.stackexchange.com/a/251602 Original solution.
         *
         * @return array $image_sizes The image sizes
         */
        private function get_registered_image_sizes()
        {
        }
        /**
         * Fix image orientation for one or more attachments.
         *
         * ## OPTIONS
         *
         * [<attachment-id>...]
         * : One or more IDs of the attachments to regenerate.
         *
         * [--dry-run]
         * : Check images needing orientation without performing the operation.
         *
         * ## EXAMPLES
         *
         *     # Fix orientation for all images.
         *     $ wp media fix-orientation
         *     1/3 Fixing orientation for "Landscape_4" (ID 62).
         *     2/3 Fixing orientation for "Landscape_3" (ID 61).
         *     3/3 Fixing orientation for "Landscape_2" (ID 60).
         *     Success: Fixed 3 of 3 images.
         *
         *     # Fix orientation dry run.
         *     $ wp media fix-orientation 63 -dry run
         *     1/1 "Portrait_6" (ID 63) will be affected.
         *     Success: 1 of 1 image will be affected.
         *
         *     # Fix orientation for specific images.
         *     $ wp media fix-orientation 63
         *     1/1 Fixing orientation for "Portrait_6" (ID 63).
         *     Success: Fixed 1 of 1 images.
         *
         * @subcommand fix-orientation
         */
        public function fix_orientation($args, $assoc_args)
        {
        }
        /**
         * Perform orientation fix on attachments.
         *
         * @param int    $id        Attachment Id.
         * @param string $progress  Current progress string.
         * @param int    $successes Count of success in current operation.
         * @param int    $errors    Count of errors in current operation.
         * @param bool   $dry_run   Is this a dry run?
         */
        private function process_orientation_fix($id, $progress, &$successes, &$errors, $dry_run)
        {
        }
        /**
         * Perform image rotate operations on the image.
         *
         * @param int    $id             Attachment Id.
         * @param array  $metadata       Attachment Metadata.
         * @param array  $image_meta     `image_meta` information for the attachment.
         * @param string $full_size_path Path to original image.
         *
         * @return bool Whether the image rotation operation succeeded.
         */
        private function flip_rotate_image($id, $metadata, $image_meta, $full_size_path)
        {
        }
        /**
         * Return array of operations to be done for provided orientation value.
         *
         * @param int $orientation EXIF orientation value.
         *
         * @return array
         */
        private function calculate_transformation($orientation)
        {
        }
        /**
         * Add compatibility indirection to get_attached_file().
         *
         * In WordPress 5.3, behavior changed to account for automatic resizing of
         * big image files.
         *
         * @see https://core.trac.wordpress.org/ticket/47873
         *
         * @param int $attachment_id ID of the attachment to get the filepath for.
         * @return string|false Filepath of the attachment, or false if not found.
         */
        private function get_attached_file($attachment_id)
        {
        }
    }
}
namespace Mustangostang {
    /**
     * Spyc -- A Simple PHP YAML Class
     * @version 0.6.2
     * @author Vlad Andersen <vlad.andersen@gmail.com>
     * @author Chris Wanstrath <chris@ozmm.org>
     * @link https://github.com/mustangostang/spyc/
     * @copyright Copyright 2005-2006 Chris Wanstrath, 2006-2011 Vlad Andersen
     * @license http://www.opensource.org/licenses/mit-license.php MIT License
     * @package Spyc
     */
    /**
     * The Simple PHP YAML Class.
     *
     * This class can be used to read a YAML file and convert its contents
     * into a PHP array.  It currently supports a very limited subsection of
     * the YAML spec.
     *
     * Usage:
     * <code>
     *   $Spyc  = new Spyc;
     *   $array = $Spyc->load($file);
     * </code>
     * or:
     * <code>
     *   $array = Spyc::YAMLLoad($file);
     * </code>
     * or:
     * <code>
     *   $array = spyc_load_file($file);
     * </code>
     * @package Spyc
     */
    class Spyc
    {
        // SETTINGS
        const REMPTY = "\0\0\0\0\0";
        /**
         * Setting this to true will force YAMLDump to enclose any string value in
         * quotes.  False by default.
         *
         * @var bool
         */
        public $setting_dump_force_quotes = false;
        /**
         * Setting this to true will forse YAMLLoad to use syck_load function when
         * possible. False by default.
         * @var bool
         */
        public $setting_use_syck_is_possible = false;
        /**#@+
         * @access private
         * @var mixed
         */
        private $_dumpIndent;
        private $_dumpWordWrap;
        private $_containsGroupAnchor = false;
        private $_containsGroupAlias = false;
        private $path;
        private $result;
        private $LiteralPlaceHolder = '___YAML_Literal_Block___';
        private $SavedGroups = array();
        private $indent;
        /**
         * Path modifier that should be applied after adding current element.
         * @var array
         */
        private $delayedPath = array();
        /**#@+
         * @access public
         * @var mixed
         */
        public $_nodeId;
        /**
         * Load a valid YAML string to Spyc.
         * @param string $input
         * @return array
         */
        public function load($input)
        {
        }
        /**
         * Load a valid YAML file to Spyc.
         * @param string $file
         * @return array
         */
        public function loadFile($file)
        {
        }
        /**
         * Load YAML into a PHP array statically
         *
         * The load method, when supplied with a YAML stream (string or file),
         * will do its best to convert YAML in a file into a PHP array.  Pretty
         * simple.
         *  Usage:
         *  <code>
         *   $array = Spyc::YAMLLoad('lucky.yaml');
         *   print_r($array);
         *  </code>
         * @access public
         * @return array
         * @param string $input Path of YAML file or string containing YAML
         */
        public static function YAMLLoad($input)
        {
        }
        /**
         * Load a string of YAML into a PHP array statically
         *
         * The load method, when supplied with a YAML string, will do its best
         * to convert YAML in a string into a PHP array.  Pretty simple.
         *
         * Note: use this function if you don't want files from the file system
         * loaded and processed as YAML.  This is of interest to people concerned
         * about security whose input is from a string.
         *
         *  Usage:
         *  <code>
         *   $array = Spyc::YAMLLoadString("---\n0: hello world\n");
         *   print_r($array);
         *  </code>
         * @access public
         * @return array
         * @param string $input String containing YAML
         */
        public static function YAMLLoadString($input)
        {
        }
        /**
         * Dump YAML from PHP array statically
         *
         * The dump method, when supplied with an array, will do its best
         * to convert the array into friendly YAML.  Pretty simple.  Feel free to
         * save the returned string as nothing.yaml and pass it around.
         *
         * Oh, and you can decide how big the indent is and what the wordwrap
         * for folding is.  Pretty cool -- just pass in 'false' for either if
         * you want to use the default.
         *
         * Indent's default is 2 spaces, wordwrap's default is 40 characters.  And
         * you can turn off wordwrap by passing in 0.
         *
         * @access public
         * @return string
         * @param array|\stdClass $array PHP array
         * @param int $indent Pass in false to use the default, which is 2
         * @param int $wordwrap Pass in 0 for no wordwrap, false for default (40)
         * @param bool $no_opening_dashes Do not start YAML file with "---\n"
         */
        public static function YAMLDump($array, $indent = false, $wordwrap = false, $no_opening_dashes = false)
        {
        }
        /**
         * Dump PHP array to YAML
         *
         * The dump method, when supplied with an array, will do its best
         * to convert the array into friendly YAML.  Pretty simple.  Feel free to
         * save the returned string as tasteful.yaml and pass it around.
         *
         * Oh, and you can decide how big the indent is and what the wordwrap
         * for folding is.  Pretty cool -- just pass in 'false' for either if
         * you want to use the default.
         *
         * Indent's default is 2 spaces, wordwrap's default is 40 characters.  And
         * you can turn off wordwrap by passing in 0.
         *
         * @access public
         * @return string
         * @param array $array PHP array
         * @param int $indent Pass in false to use the default, which is 2
         * @param int $wordwrap Pass in 0 for no wordwrap, false for default (40)
         */
        public function dump($array, $indent = false, $wordwrap = false, $no_opening_dashes = false)
        {
        }
        /**
         * Attempts to convert a key / value array item to YAML
         * @access private
         * @return string
         * @param $key The name of the key
         * @param $value The value of the item
         * @param $indent The indent of the current node
         */
        private function _yamlize($key, $value, $indent, $previous_key = -1, $first_key = 0, $source_array = null)
        {
        }
        /**
         * Attempts to convert an array to YAML
         * @access private
         * @return string
         * @param $array The array you want to convert
         * @param $indent The indent of the current level
         */
        private function _yamlizeArray($array, $indent)
        {
        }
        /**
         * Returns YAML from a key and a value
         * @access private
         * @return string
         * @param $key The name of the key
         * @param $value The value of the item
         * @param $indent The indent of the current node
         */
        private function _dumpNode($key, $value, $indent, $previous_key = -1, $first_key = 0, $source_array = null)
        {
        }
        /**
         * Creates a literal block for dumping
         * @access private
         * @return string
         * @param $value
         * @param $indent int The value of the indent
         */
        private function _doLiteralBlock($value, $indent)
        {
        }
        /**
         * Folds a string of text, if necessary
         * @access private
         * @return string
         * @param $value The string you wish to fold
         */
        private function _doFolding($value, $indent)
        {
        }
        private function isTrueWord($value)
        {
        }
        private function isFalseWord($value)
        {
        }
        private function isNullWord($value)
        {
        }
        private function isTranslationWord($value)
        {
        }
        /**
         * Coerce a string into a native type
         * Reference: http://yaml.org/type/bool.html
         * TODO: Use only words from the YAML spec.
         * @access private
         * @param $value The value to coerce
         */
        private function coerceValue(&$value)
        {
        }
        /**
         * Given a set of words, perform the appropriate translations on them to
         * match the YAML 1.1 specification for type coercing.
         * @param $words The words to translate
         * @access private
         */
        private static function getTranslations(array $words)
        {
        }
        // LOADING FUNCTIONS
        private function _load($input)
        {
        }
        private function _loadString($input)
        {
        }
        private function loadWithSource($Source)
        {
        }
        private function loadFromSource($input)
        {
        }
        private function loadFromString($input)
        {
        }
        /**
         * Parses YAML code and returns an array for a node
         * @access private
         * @return array
         * @param string $line A line from the YAML file
         */
        private function _parseLine($line)
        {
        }
        /**
         * Finds the type of the passed value, returns the value as the new type.
         * @access private
         * @param string $value
         * @return mixed
         */
        private function _toType($value)
        {
        }
        /**
         * Used in inlines to check for more inlines or quoted strings
         * @access private
         * @return array
         */
        private function _inlineEscape($inline)
        {
        }
        private function literalBlockContinues($line, $lineIndent)
        {
        }
        private function referenceContentsByAlias($alias)
        {
        }
        private function addArrayInline($array, $indent)
        {
        }
        private function addArray($incoming_data, $incoming_indent)
        {
        }
        private static function startsLiteralBlock($line)
        {
        }
        private static function greedilyNeedNextLine($line)
        {
        }
        private function addLiteralLine($literalBlock, $line, $literalBlockStyle, $indent = -1)
        {
        }
        function revertLiteralPlaceHolder($lineArray, $literalBlock)
        {
        }
        private static function stripIndent($line, $indent = -1)
        {
        }
        private function getParentPathByIndent($indent)
        {
        }
        private function clearBiggerPathValues($indent)
        {
        }
        private static function isComment($line)
        {
        }
        private static function isEmpty($line)
        {
        }
        private function isArrayElement($line)
        {
        }
        private function isHashElement($line)
        {
        }
        private function isLiteral($line)
        {
        }
        private static function unquote($value)
        {
        }
        private function startsMappedSequence($line)
        {
        }
        private function returnMappedSequence($line)
        {
        }
        private function checkKeysInValue($value)
        {
        }
        private function returnMappedValue($line)
        {
        }
        private function startsMappedValue($line)
        {
        }
        private function isPlainArray($line)
        {
        }
        private function returnPlainArray($line)
        {
        }
        private function returnKeyValuePair($line)
        {
        }
        private function returnArrayElement($line)
        {
        }
        private function nodeContainsGroup($line)
        {
        }
        private function addGroup($line, $group)
        {
        }
        private function stripGroup($line, $group)
        {
        }
    }
}
namespace {
    /**
     * Lists, installs, and removes WP-CLI packages.
     *
     * WP-CLI packages are community-maintained projects built on WP-CLI. They can
     * contain WP-CLI commands, but they can also just extend WP-CLI in some way.
     *
     * Installable packages are listed in the
     * [Package Index](http://wp-cli.org/package-index/).
     *
     * Learn how to create your own command from the
     * [Commands Cookbook](https://make.wordpress.org/cli/handbook/commands-cookbook/)
     *
     * ## EXAMPLES
     *
     *     # List installed packages
     *     $ wp package list
     *     +-----------------------+------------------------------------------+---------+------------+
     *     | name                  | description                              | authors | version    |
     *     +-----------------------+------------------------------------------+---------+------------+
     *     | wp-cli/server-command | Start a development server for WordPress |         | dev-master |
     *     +-----------------------+------------------------------------------+---------+------------+
     *
     *     # Install the latest development version of the package
     *     $ wp package install wp-cli/server-command
     *     Installing package wp-cli/server-command (dev-master)
     *     Updating /home/person/.wp-cli/packages/composer.json to require the package...
     *     Using Composer to install the package...
     *     ---
     *     Loading composer repositories with package information
     *     Updating dependencies
     *     Resolving dependencies through SAT
     *     Dependency resolution completed in 0.005 seconds
     *     Analyzed 732 packages to resolve dependencies
     *     Analyzed 1034 rules to resolve dependencies
     *      - Installing package
     *     Writing lock file
     *     Generating autoload files
     *     ---
     *     Success: Package installed.
     *
     *     # Uninstall package
     *     $ wp package uninstall wp-cli/server-command
     *     Removing require statement from /home/person/.wp-cli/packages/composer.json
     *     Deleting package directory /home/person/.wp-cli/packages/vendor/wp-cli/server-command
     *     Regenerating Composer autoload.
     *     Success: Uninstalled package.
     *
     * @package WP-CLI
     *
     * @when before_wp_load
     */
    class Package_Command extends \WP_CLI_Command
    {
        const PACKAGE_INDEX_URL = 'https://wp-cli.org/package-index/';
        const SSL_CERTIFICATE = '/rmccue/requests/library/Requests/Transport/cacert.pem';
        private $pool = \false;
        /**
         * Default author data used while creating default WP-CLI packages composer.json.
         *
         * @var array
         */
        private $author_data = ['name' => 'WP-CLI', 'email' => 'noreply@wpcli.org'];
        /**
         * Default repository data used while creating default WP-CLI packages composer.json.
         * @var array
         */
        private $composer_type_package = ['type' => 'composer', 'url' => self::PACKAGE_INDEX_URL];
        /**
         * Browses WP-CLI packages available for installation.
         *
         * Lists packages available for installation from the [Package Index](http://wp-cli.org/package-index/).
         * Although the package index will remain in place for backward compatibility reasons, it has been
         * deprecated and will not be updated further. Please refer to https://github.com/wp-cli/ideas/issues/51
         * to read about its potential replacement.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each package:
         *
         * * name
         * * description
         * * authors
         * * version
         *
         * There are no optionally available fields.
         *
         * ## EXAMPLES
         *
         *     $ wp package browse --format=yaml
         *     ---
         *     10up/mu-migration:
         *       name: 10up/mu-migration
         *       description: A set of WP-CLI commands to support the migration of single WordPress instances to multisite
         *       authors: Nícholas André
         *       version: dev-master, dev-develop
         *     aaemnnosttv/wp-cli-dotenv-command:
         *       name: aaemnnosttv/wp-cli-dotenv-command
         *       description: Dotenv commands for WP-CLI
         *       authors: Evan Mattson
         *       version: v0.1, v0.1-beta.1, v0.2, dev-master, dev-dev, dev-develop, dev-tests/behat
         *     aaemnnosttv/wp-cli-http-command:
         *       name: aaemnnosttv/wp-cli-http-command
         *       description: WP-CLI command for using the WordPress HTTP API
         *       authors: Evan Mattson
         *       version: dev-master
         */
        public function browse($_, $assoc_args)
        {
        }
        /**
         * Installs a WP-CLI package.
         *
         * Packages are required to be a valid Composer package, and can be
         * specified as:
         *
         * * Package name from WP-CLI's package index.
         * * Git URL accessible by the current shell user.
         * * Path to a directory on the local machine.
         * * Local or remote .zip file.
         *
         * Packages are installed to `~/.wp-cli/packages/` by default. Use the
         * `WP_CLI_PACKAGES_DIR` environment variable to provide a custom path.
         *
         * When installing a local directory, WP-CLI simply registers a
         * reference to the directory. If you move or delete the directory, WP-CLI's
         * reference breaks.
         *
         * When installing a .zip file, WP-CLI extracts the package to
         * `~/.wp-cli/packages/local/<package-name>`.
         *
         * ## OPTIONS
         *
         * <name|git|path|zip>
         * : Name, git URL, directory path, or .zip file for the package to install.
         * Names can optionally include a version constraint
         * (e.g. wp-cli/server-command:@stable).
         *
         * ## EXAMPLES
         *
         *     # Install the latest development version from the package index.
         *     $ wp package install wp-cli/server-command
         *     Installing package wp-cli/server-command (dev-master)
         *     Updating /home/person/.wp-cli/packages/composer.json to require the package...
         *     Using Composer to install the package...
         *     ---
         *     Loading composer repositories with package information
         *     Updating dependencies
         *     Resolving dependencies through SAT
         *     Dependency resolution completed in 0.005 seconds
         *     Analyzed 732 packages to resolve dependencies
         *     Analyzed 1034 rules to resolve dependencies
         *      - Installing package
         *     Writing lock file
         *     Generating autoload files
         *     ---
         *     Success: Package installed.
         *
         *     # Install the latest stable version.
         *     $ wp package install wp-cli/server-command:@stable
         *
         *     # Install a package hosted at a git URL.
         *     $ wp package install git@github.com:runcommand/hook.git
         *
         *     # Install a package hosted at a GitLab.com URL.
         *     $ wp package install https://gitlab.com/foo/wp-cli-bar-command.git
         *
         *     # Install a package in a .zip file.
         *     $ wp package install google-sitemap-generator-cli.zip
         */
        public function install($args, $assoc_args)
        {
        }
        /**
         * Lists installed WP-CLI packages.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each package:
         *
         * * name
         * * authors
         * * version
         * * update
         * * update_version
         *
         * These fields are optionally available:
         *
         * * description
         *
         * ## EXAMPLES
         *
         *     $ wp package list
         *     +-----------------------+------------------------------------------+---------+------------+
         *     | name                  | description                              | authors | version    |
         *     +-----------------------+------------------------------------------+---------+------------+
         *     | wp-cli/server-command | Start a development server for WordPress |         | dev-master |
         *     +-----------------------+------------------------------------------+---------+------------+
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets the path to an installed WP-CLI package, or the package directory.
         *
         * If you want to contribute to a package, this is a great way to jump to it.
         *
         * ## OPTIONS
         *
         * [<name>]
         * : Name of the package to get the directory for.
         *
         * ## EXAMPLES
         *
         *     # Get package path
         *     $ wp package path
         *     /home/person/.wp-cli/packages/
         *
         *     # Change directory to package path
         *     $ cd $(wp package path) && pwd
         *     /home/vagrant/.wp-cli/packages
         */
        public function path($args)
        {
        }
        /**
         * Updates all installed WP-CLI packages to their latest version.
         *
         * ## EXAMPLES
         *
         *     $ wp package update
         *     Using Composer to update packages...
         *     ---
         *     Loading composer repositories with package information
         *     Updating dependencies
         *     Resolving dependencies through SAT
         *     Dependency resolution completed in 0.074 seconds
         *     Analyzed 1062 packages to resolve dependencies
         *     Analyzed 22383 rules to resolve dependencies
         *     Writing lock file
         *     Generating autoload files
         *     ---
         *     Success: Packages updated.
         */
        public function update()
        {
        }
        /**
         * Uninstalls a WP-CLI package.
         *
         * ## OPTIONS
         *
         * <name>
         * : Name of the package to uninstall.
         *
         * ## EXAMPLES
         *
         *     $ wp package uninstall wp-cli/server-command
         *     Removing require statement from /home/person/.wp-cli/packages/composer.json
         *     Deleting package directory /home/person/.wp-cli/packages/vendor/wp-cli/server-command
         *     Regenerating Composer autoload.
         *     Success: Uninstalled package.
         */
        public function uninstall($args)
        {
        }
        /**
         * Checks whether a package is a WP-CLI community package based
         * on membership in our package index.
         *
         * @param object      $package     A package object
         * @return bool
         */
        private function is_community_package($package)
        {
        }
        /**
         * Gets a Composer instance.
         */
        private function get_composer()
        {
        }
        /**
         * Gets all of the community packages.
         *
         * @return array
         */
        private function get_community_packages()
        {
        }
        /**
         * Gets the package index instance
         *
         * We need to construct the instance manually, because there's no way to select
         * a particular instance using $composer->getRepositoryManager()
         *
         * @return ComposerRepository
         */
        private function package_index()
        {
        }
        /**
         * Displays a set of packages
         *
         * @param string $context
         * @param array
         * @param array
         */
        private function show_packages($context, $packages, $assoc_args)
        {
        }
        /**
         * Gets a package by its shortened identifier.
         *
         * A shortened identifier has the form `<vendor>/<package>`.
         *
         * This method first checks the deprecated package index, for BC reasons,
         * and then falls back to the corresponding GitHub URL.
         */
        private function get_package_by_shortened_identifier($package_name)
        {
        }
        /**
         * Gets the installed community packages.
         */
        private function get_installed_packages()
        {
        }
        /**
         * Gets an installed package by its name.
         */
        private function get_installed_package_by_name($package_name)
        {
        }
        /**
         * Checks if the package name provided is already installed.
         */
        private function is_package_installed($package_name)
        {
        }
        /**
         * Gets the name of the package from the composer.json in a directory path
         *
         * @param string $dir_package
         * @return array Two-element array containing package name and version.
         */
        private static function get_package_name_and_version_from_dir_package($dir_package)
        {
        }
        /**
         * Gets the WP-CLI packages composer.json object.
         */
        private function get_composer_json()
        {
        }
        /**
         * Gets the absolute path to the WP-CLI packages composer.json.
         */
        private function get_composer_json_path()
        {
        }
        /**
         * Gets the WP-CLI version for composer.json
         */
        private static function get_wp_cli_version_composer()
        {
        }
        /**
         * Creates a default WP-CLI packages composer.json.
         *
         * @param string $composer_path Where the composer.json should be created
         * @return string Returns the absolute path of the newly created default WP-CLI packages composer.json.
         */
        private function create_default_composer_json($composer_path)
        {
        }
        /**
         * Given a package, this finds the latest package matching it
         *
         * @param  PackageInterface $package
         * @param  Composer         $composer
         * @param  string           $phpVersion
         * @param  bool             $minorOnly
         *
         * @return PackageInterface|null
         */
        private function find_latest_package(\Composer\Package\PackageInterface $package, \Composer\Composer $composer, $php_version, $minor_only = \false)
        {
        }
        private function get_pool(\Composer\Composer $composer)
        {
        }
        /**
         * Checks whether a given package is a git repository.
         *
         * @param string $package Package name to check.
         *
         * @return bool Whether the package is a git repository.
         */
        private function is_git_repository($package)
        {
        }
        /**
         * Checks that `$package_name` matches the name in composer.json at Github.com, and return corrected value if not.
         *
         * @string $package_name Package name to check.
         * @string $version Optional. Package version. Default 'master'.
         * @string Package name, possibly changed to match that in repo.
         */
        private function check_github_package_name($package_name, $version = '')
        {
        }
        /**
         * Checks that `$package_name` matches the name in composer.json at the corresponding upstream repository, and return corrected value if not.
         *
         * @string $package_name Package name to check.
         * @string $version Optional. Package version. Default 'master'.
         * @string Package name, possibly changed to match that in repo.
         */
        private function check_git_package_name($package_name, $url = '', $version = '')
        {
        }
        /**
         * Checks that `$package_name` matches the name in composer.json at GitLab.com, and return corrected value if not.
         *
         * @string $package_name Package name to check.
         * @string $version Optional. Package version. Default 'master'.
         * @string Package name, possibly changed to match that in repo.
         */
        private function check_gitlab_package_name($package_name, $version = '')
        {
        }
        /**
         * Get the version to use for raw github request. Very basic.
         *
         * @string $version Package version.
         * @string Version to use for github request.
         */
        private function get_raw_git_version($version)
        {
        }
        /**
         * Gets the release tag for the latest stable release of a GitHub repository.
         *
         * @param string $package_name Name of the repository.
         *
         * @return string Release tag.
         */
        private function get_github_latest_release_tag($package_name)
        {
        }
        /**
         * Guesses the version constraint from a release tag.
         *
         * @param string $tag Release tag to guess the version constraint from.
         *
         * @return string Version constraint.
         */
        private function guess_version_constraint_from_tag($tag)
        {
        }
        /**
         * Sets `COMPOSER_AUTH` environment variable (which Composer merges into the config setup in `Composer\Factory::createConfig()`) depending on available environment variables.
         * Avoids authorization failures when accessing various sites.
         */
        private function set_composer_auth_env_var()
        {
        }
        /**
         * Avoid using default Composer CA bundle if in phar as we don't include it.
         * See https://github.com/composer/ca-bundle/blob/1.1.0/src/CaBundle.php#L64
         */
        private function avoid_composer_ca_bundle()
        {
        }
        /**
         * Reads the WP-CLI packages composer.json, checking validity and returning array containing its path, contents, and decoded contents.
         *
         * @return array Indexed array containing the path, the contents, and the decoded contents of the WP-CLI packages composer.json.
         */
        private function get_composer_json_path_backup_decoded()
        {
        }
        /**
         * Registers a PHP shutdown function to revert composer.json unless
         * referenced `$revert` flag is false.
         *
         * @param string $json_path       Path to composer.json.
         * @param string $composer_backup Original contents of composer.json.
         * @param bool   &$revert         Flags whether to revert or not.
         */
        private function register_revert_shutdown_function($json_path, $composer_backup, &$revert)
        {
        }
    }
}
namespace WP_CLI {
    /**
     * @author Jordi Boggiano <j.boggiano@seld.be>
     */
    class JsonManipulator
    {
        private static $DEFINES = '(?(DEFINE)
       (?<number>   -? (?= [1-9]|0(?!\\d) ) \\d+ (\\.\\d+)? ([eE] [+-]? \\d+)? )
       (?<boolean>   true | false | null )
       (?<string>    " ([^"\\\\]* | \\\\ ["\\\\bfnrt\\/] | \\\\ u [0-9a-f]{4} )* " )
       (?<array>     \\[  (?:  (?&json) \\s* (?: , (?&json) \\s* )*  )?  \\s* \\] )
       (?<pair>      \\s* (?&string) \\s* : (?&json) \\s* )
       (?<object>    \\{  (?:  (?&pair)  (?: , (?&pair)  )*  )?  \\s* \\} )
       (?<json>   \\s* (?: (?&number) | (?&boolean) | (?&string) | (?&array) | (?&object) ) )
    )';
        private $contents;
        private $newline;
        private $indent;
        public function __construct($contents)
        {
        }
        public function getContents()
        {
        }
        public function addLink($type, $package, $constraint, $sortPackages = false, $caseInsensitive = false)
        {
        }
        /**
         * Sorts packages by importance (platform packages first, then PHP dependencies) and alphabetically.
         *
         * @link https://getcomposer.org/doc/02-libraries.md#platform-packages
         *
         * @param array $packages
         */
        private function sortPackages(array &$packages = array())
        {
        }
        public function addRepository($name, $config)
        {
        }
        public function removeRepository($name)
        {
        }
        public function addConfigSetting($name, $value)
        {
        }
        public function removeConfigSetting($name)
        {
        }
        public function addProperty($name, $value)
        {
        }
        public function removeProperty($name)
        {
        }
        public function addSubNode($mainNode, $name, $value, $caseInsensitive = false)
        {
        }
        public function removeSubNode($mainNode, $name, $caseInsensitive = false)
        {
        }
        public function addMainKey($key, $content)
        {
        }
        public function removeMainKey($key)
        {
        }
        public function format($data, $depth = 0)
        {
        }
        protected function detectIndenting()
        {
        }
        protected function pregMatch($re, $str, &$matches = array())
        {
        }
    }
}
namespace {
    class HttpConsole
    {
        protected $_host;
        protected $_prompt;
        public function __construct($host)
        {
        }
        public function handleRequest($type, $path)
        {
        }
        public function run()
        {
        }
    }
}
namespace cli {
    /**
     * Parses command line arguments.
     */
    class Arguments implements \ArrayAccess
    {
        protected $_flags = array();
        protected $_options = array();
        protected $_strict = false;
        protected $_input = array();
        protected $_invalid = array();
        protected $_parsed;
        protected $_lexer;
        /**
         * Initializes the argument parser. If you wish to change the default behaviour
         * you may pass an array of options as the first argument. Valid options are
         * `'help'` and `'strict'`, each a boolean.
         *
         * `'help'` is `true` by default, `'strict'` is false by default.
         *
         * @param  array  $options  An array of options for this parser.
         */
        public function __construct($options = array())
        {
        }
        /**
         * Get the list of arguments found by the defined definitions.
         *
         * @return array
         */
        public function getArguments()
        {
        }
        public function getHelpScreen()
        {
        }
        /**
         * Encodes the parsed arguments as JSON.
         *
         * @return string
         */
        public function asJSON()
        {
        }
        /**
         * Returns true if a given argument was parsed.
         *
         * @param mixed  $offset  An Argument object or the name of the argument.
         * @return bool
         */
        public function offsetExists($offset)
        {
        }
        /**
         * Get the parsed argument's value.
         *
         * @param mixed  $offset  An Argument object or the name of the argument.
         * @return mixed
         */
        public function offsetGet($offset)
        {
        }
        /**
         * Sets the value of a parsed argument.
         *
         * @param mixed  $offset  An Argument object or the name of the argument.
         * @param mixed  $value   The value to set
         */
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset a parsed argument.
         *
         * @param mixed  $offset  An Argument object or the name of the argument.
         */
        public function offsetUnset($offset)
        {
        }
        /**
         * Adds a flag (boolean argument) to the argument list.
         *
         * @param mixed  $flag  A string representing the flag, or an array of strings.
         * @param array  $settings  An array of settings for this flag.
         * @setting string  description  A description to be shown in --help.
         * @setting bool    default  The default value for this flag.
         * @setting bool    stackable  Whether the flag is repeatable to increase the value.
         * @setting array   aliases  Other ways to trigger this flag.
         * @return $this
         */
        public function addFlag($flag, $settings = array())
        {
        }
        /**
         * Add multiple flags at once. The input array should be keyed with the
         * primary flag character, and the values should be the settings array
         * used by {addFlag}.
         *
         * @param array  $flags  An array of flags to add
         * @return $this
         */
        public function addFlags($flags)
        {
        }
        /**
         * Adds an option (string argument) to the argument list.
         *
         * @param mixed  $option  A string representing the option, or an array of strings.
         * @param array  $settings  An array of settings for this option.
         * @setting string  description  A description to be shown in --help.
         * @setting bool    default  The default value for this option.
         * @setting array   aliases  Other ways to trigger this option.
         * @return $this
         */
        public function addOption($option, $settings = array())
        {
        }
        /**
         * Add multiple options at once. The input array should be keyed with the
         * primary option string, and the values should be the settings array
         * used by {addOption}.
         *
         * @param array  $options  An array of options to add
         * @return $this
         */
        public function addOptions($options)
        {
        }
        /**
         * Enable or disable strict mode. If strict mode is active any invalid
         * arguments found by the parser will throw `cli\arguments\InvalidArguments`.
         *
         * Even if strict is disabled, invalid arguments are logged and can be
         * retrieved with `cli\Arguments::getInvalidArguments()`.
         *
         * @param bool  $strict  True to enable, false to disable.
         * @return $this
         */
        public function setStrict($strict)
        {
        }
        /**
         * Get the list of invalid arguments the parser found.
         *
         * @return array
         */
        public function getInvalidArguments()
        {
        }
        /**
         * Get a flag by primary matcher or any defined aliases.
         *
         * @param mixed  $flag  Either a string representing the flag or an
         *                      cli\arguments\Argument object.
         * @return array
         */
        public function getFlag($flag)
        {
        }
        public function getFlags()
        {
        }
        public function hasFlags()
        {
        }
        /**
         * Returns true if the given argument is defined as a flag.
         *
         * @param mixed  $argument  Either a string representing the flag or an
         *                          cli\arguments\Argument object.
         * @return bool
         */
        public function isFlag($argument)
        {
        }
        /**
         * Returns true if the given flag is stackable.
         *
         * @param mixed  $flag  Either a string representing the flag or an
         *                      cli\arguments\Argument object.
         * @return bool
         */
        public function isStackable($flag)
        {
        }
        /**
         * Get an option by primary matcher or any defined aliases.
         *
         * @param mixed  $option Either a string representing the option or an
         *                       cli\arguments\Argument object.
         * @return array
         */
        public function getOption($option)
        {
        }
        public function getOptions()
        {
        }
        public function hasOptions()
        {
        }
        /**
         * Returns true if the given argument is defined as an option.
         *
         * @param mixed  $argument  Either a string representing the option or an
         *                          cli\arguments\Argument object.
         * @return bool
         */
        public function isOption($argument)
        {
        }
        /**
         * Parses the argument list with the given options. The returned argument list
         * will use either the first long name given or the first name in the list
         * if a long name is not given.
         *
         * @return array
         * @throws arguments\InvalidArguments
         */
        public function parse()
        {
        }
        /**
         * This applies the default values, if any, of all of the
         * flags and options, so that if there is a default value
         * it will be available.
         */
        private function _applyDefaults()
        {
        }
        private function _warn($message)
        {
        }
        private function _parseFlag($argument)
        {
        }
        private function _parseOption($option)
        {
        }
    }
    /**
     * Change the color of text.
     *
     * Reference: http://graphcomp.com/info/specs/ansi_col.html#colors
     */
    class Colors
    {
        protected static $_colors = array('color' => array('black' => 30, 'red' => 31, 'green' => 32, 'yellow' => 33, 'blue' => 34, 'magenta' => 35, 'cyan' => 36, 'white' => 37), 'style' => array('bright' => 1, 'dim' => 2, 'underline' => 4, 'blink' => 5, 'reverse' => 7, 'hidden' => 8), 'background' => array('black' => 40, 'red' => 41, 'green' => 42, 'yellow' => 43, 'blue' => 44, 'magenta' => 45, 'cyan' => 46, 'white' => 47));
        protected static $_enabled = null;
        protected static $_string_cache = array();
        public static function enable($force = true)
        {
        }
        public static function disable($force = true)
        {
        }
        /**
         * Check if we should colorize output based on local flags and shell type.
         *
         * Only check the shell type if `Colors::$_enabled` is null and `$colored` is null.
         */
        public static function shouldColorize($colored = null)
        {
        }
        /**
         * Set the color.
         *
         * @param string  $color  The name of the color or style to set.
         * @return string
         */
        public static function color($color)
        {
        }
        /**
         * Colorize a string using helpful string formatters. If the `Streams::$out` points to a TTY coloring will be enabled,
         * otherwise disabled. You can control this check with the `$colored` parameter.
         *
         * @param string   $string
         * @param boolean  $colored  Force enable or disable the colorized output. If left as `null` the TTY will control coloring.
         * @return string
         */
        public static function colorize($string, $colored = null)
        {
        }
        /**
         * Remove color information from a string.
         *
         * @param string $string A string with color information.
         * @param int    $keep   Optional. If the 1 bit is set, color tokens (eg "%n") won't be stripped. If the 2 bit is set, color encodings (ANSI escapes) won't be stripped. Default 0.
         * @return string A string with color information removed.
         */
        public static function decolorize($string, $keep = 0)
        {
        }
        /**
         * Cache the original, colorized, and decolorized versions of a string.
         *
         * @param string $passed The original string before colorization.
         * @param string $colorized The string after running through self::colorize.
         * @param string $deprecated Optional. Not used. Default null.
         */
        public static function cacheString($passed, $colorized, $deprecated = null)
        {
        }
        /**
         * Return the length of the string without color codes.
         *
         * @param string  $string  the string to measure
         * @return int
         */
        public static function length($string)
        {
        }
        /**
         * Return the width (length in characters) of the string without color codes if enabled.
         *
         * @param string      $string        The string to measure.
         * @param bool        $pre_colorized Optional. Set if the string is pre-colorized. Default false.
         * @param string|bool $encoding      Optional. The encoding of the string. Default false.
         * @return int
         */
        public static function width($string, $pre_colorized = false, $encoding = false)
        {
        }
        /**
         * Pad the string to a certain display length.
         *
         * @param string      $string        The string to pad.
         * @param int         $length        The display length.
         * @param bool        $pre_colorized Optional. Set if the string is pre-colorized. Default false.
         * @param string|bool $encoding      Optional. The encoding of the string. Default false.
         * @param int         $pad_type      Optional. Can be STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH. If pad_type is not specified it is assumed to be STR_PAD_RIGHT.
         * @return string
         */
        public static function pad($string, $length, $pre_colorized = false, $encoding = false, $pad_type = STR_PAD_RIGHT)
        {
        }
        /**
         * Get the color mapping array.
         *
         * @return array Array of color tokens mapped to colors and styles.
         */
        public static function getColors()
        {
        }
        /**
         * Get the cached string values.
         *
         * @return array The cached string values.
         */
        public static function getStringCache()
        {
        }
        /**
         * Clear the string cache.
         */
        public static function clearStringCache()
        {
        }
    }
    abstract class Memoize
    {
        protected $_memoCache = array();
        public function __get($name)
        {
        }
        protected function _unmemo($name)
        {
        }
    }
    /**
     * The `Notify` class is the basis of all feedback classes, such as Indicators
     * and Progress meters. The default behaviour is to refresh output after 100ms
     * have passed. This is done to preventing the screen from flickering and keep
     * slowdowns from output to a minimum.
     *
     * The most basic form of Notifier has no maxim, and simply displays a series
     * of characters to indicate progress is being made.
     */
    abstract class Notify
    {
        protected $_current = 0;
        protected $_first = true;
        protected $_interval;
        protected $_message;
        protected $_start;
        protected $_timer;
        /**
         * Instatiates a Notification object.
         *
         * @param string  $msg       The text to display next to the Notifier.
         * @param int     $interval  The interval in milliseconds between updates.
         */
        public function __construct($msg, $interval = 100)
        {
        }
        /**
         * This method should be used to print out the Notifier. This method is
         * called from `cli\Notify::tick()` after `cli\Notify::$_interval` has passed.
         *
         * @abstract
         * @param boolean  $finish
         * @see cli\Notify::tick()
         */
        public abstract function display($finish = false);
        /**
         * Reset the notifier state so the same instance can be used in multiple loops.
         */
        public function reset()
        {
        }
        /**
         * Returns the formatted tick count.
         *
         * @return string  The formatted tick count.
         */
        public function current()
        {
        }
        /**
         * Calculates the time elapsed since the Notifier was first ticked.
         *
         * @return int  The elapsed time in seconds.
         */
        public function elapsed()
        {
        }
        /**
         * Calculates the speed (number of ticks per second) at which the Notifier
         * is being updated.
         *
         * @return int  The number of ticks performed in 1 second.
         */
        public function speed()
        {
        }
        /**
         * Takes a time span given in seconds and formats it for display. The
         * returned string will be in MM:SS form.
         *
         * @param int  $time The time span in seconds to format.
         * @return string  The formatted time span.
         */
        public function formatTime($time)
        {
        }
        /**
         * Finish our Notification display. Should be called after the Notifier is
         * no longer needed.
         *
         * @see cli\Notify::display()
         */
        public function finish()
        {
        }
        /**
         * Increments are tick counter by the given amount. If no amount is provided,
         * the ticker is incremented by 1.
         *
         * @param int  $increment  The amount to increment by.
         */
        public function increment($increment = 1)
        {
        }
        /**
         * Determines whether the display should be updated or not according to
         * our interval setting.
         *
         * @return boolean  `true` if the display should be updated, `false` otherwise.
         */
        public function shouldUpdate()
        {
        }
        /**
         * This method is the meat of all Notifiers. First we increment the ticker
         * and then update the display if enough time has passed since our last tick.
         *
         * @param int  $increment  The amount to increment by.
         * @see cli\Notify::increment()
         * @see cli\Notify::shouldUpdate()
         * @see cli\Notify::display()
         */
        public function tick($increment = 1)
        {
        }
    }
    /**
     * A more complex type of Notifier, `Progress` Notifiers always have a maxim
     * value and generally show some form of percent complete or estimated time
     * to completion along with the standard Notifier displays.
     *
     * @see cli\Notify
     */
    abstract class Progress extends \cli\Notify
    {
        protected $_total = 0;
        /**
         * Instantiates a Progress Notifier.
         *
         * @param string  $msg       The text to display next to the Notifier.
         * @param int     $total     The total number of ticks we will be performing.
         * @param int     $interval  The interval in milliseconds between updates.
         * @see cli\Progress::setTotal()
         */
        public function __construct($msg, $total, $interval = 100)
        {
        }
        /**
         * Set the max increments for this progress notifier.
         *
         * @param int  $total  The total number of times this indicator should be `tick`ed.
         * @throws \InvalidArgumentException  Thrown if the `$total` is less than 0.
         */
        public function setTotal($total)
        {
        }
        /**
         * Reset the progress state so the same instance can be used in multiple loops.
         */
        public function reset($total = null)
        {
        }
        /**
         * Behaves in a similar manner to `cli\Notify::current()`, but the output
         * is padded to match the length of `cli\Progress::total()`.
         *
         * @return string  The formatted and padded tick count.
         * @see cli\Progress::total()
         */
        public function current()
        {
        }
        /**
         * Returns the formatted total expected ticks.
         *
         * @return string  The formatted total ticks.
         */
        public function total()
        {
        }
        /**
         * Calculates the estimated total time for the tick count to reach the
         * total ticks given.
         *
         * @return int  The estimated total number of seconds for all ticks to be
         *              completed. This is not the estimated time left, but total.
         * @see cli\Notify::speed()
         * @see cli\Notify::elapsed()
         */
        public function estimated()
        {
        }
        /**
         * Forces the current tick count to the total ticks given at instatiation
         * time before passing on to `cli\Notify::finish()`.
         */
        public function finish()
        {
        }
        /**
         * Increments are tick counter by the given amount. If no amount is provided,
         * the ticker is incremented by 1.
         *
         * @param int  $increment  The amount to increment by.
         */
        public function increment($increment = 1)
        {
        }
        /**
         * Calculate the percentage completed.
         *
         * @return float  The percent completed.
         */
        public function percent()
        {
        }
    }
    /**
     * The `Shell` class is a utility class for shell related tasks such as
     * information on width.
     */
    class Shell
    {
        /**
         * Returns the number of columns the current shell has for display.
         *
         * @return int  The number of columns.
         * @todo Test on more systems.
         */
        public static function columns()
        {
        }
        /**
         * Checks whether the output of the current script is a TTY or a pipe / redirect
         *
         * Returns true if STDOUT output is being redirected to a pipe or a file; false is
         * output is being sent directly to the terminal.
         *
         * If an env variable SHELL_PIPE exists, returned result depends it's
         * value. Strings like 1, 0, yes, no, that validate to booleans are accepted.
         *
         * To enable ASCII formatting even when shell is piped, use the
         * ENV variable SHELL_PIPE=0
         *
         * @return bool
         */
        public static function isPiped()
        {
        }
        /**
         * Uses `stty` to hide input/output completely.
         * @param boolean $hidden Will hide/show the next data. Defaults to true.
         */
        public static function hide($hidden = true)
        {
        }
        /**
         * Is this shell in Windows?
         *
         * @return bool
         */
        private static function is_windows()
        {
        }
    }
    class Streams
    {
        protected static $out = STDOUT;
        protected static $in = STDIN;
        protected static $err = STDERR;
        static function _call($func, $args)
        {
        }
        public static function isTty()
        {
        }
        /**
         * Handles rendering strings. If extra scalar arguments are given after the `$msg`
         * the string will be rendered with `sprintf`. If the second argument is an `array`
         * then each key in the array will be the placeholder name. Placeholders are of the
         * format {:key}.
         *
         * @param string   $msg  The message to render.
         * @param mixed    ...   Either scalar arguments or a single array argument.
         * @return string  The rendered string.
         */
        public static function render($msg)
        {
        }
        /**
         * Shortcut for printing to `STDOUT`. The message and parameters are passed
         * through `sprintf` before output.
         *
         * @param string  $msg  The message to output in `printf` format.
         * @param mixed   ...   Either scalar arguments or a single array argument.
         * @return void
         * @see \cli\render()
         */
        public static function out($msg)
        {
        }
        /**
         * Pads `$msg` to the width of the shell before passing to `cli\out`.
         *
         * @param string  $msg  The message to pad and pass on.
         * @param mixed   ...   Either scalar arguments or a single array argument.
         * @return void
         * @see cli\out()
         */
        public static function out_padded($msg)
        {
        }
        /**
         * Prints a message to `STDOUT` with a newline appended. See `\cli\out` for
         * more documentation.
         *
         * @see cli\out()
         */
        public static function line($msg = '')
        {
        }
        /**
         * Shortcut for printing to `STDERR`. The message and parameters are passed
         * through `sprintf` before output.
         *
         * @param string  $msg  The message to output in `printf` format. With no string,
         *                      a newline is printed.
         * @param mixed   ...   Either scalar arguments or a single array argument.
         * @return void
         */
        public static function err($msg = '')
        {
        }
        /**
         * Takes input from `STDIN` in the given format. If an end of transmission
         * character is sent (^D), an exception is thrown.
         *
         * @param string  $format  A valid input format. See `fscanf` for documentation.
         *                         If none is given, all input up to the first newline
         *                         is accepted.
         * @param boolean $hide    If true will hide what the user types in.
         * @return string  The input with whitespace trimmed.
         * @throws \Exception  Thrown if ctrl-D (EOT) is sent as input.
         */
        public static function input($format = null, $hide = false)
        {
        }
        /**
         * Displays an input prompt. If no default value is provided the prompt will
         * continue displaying until input is received.
         *
         * @param string      $question The question to ask the user.
         * @param bool|string $default  A default value if the user provides no input.
         * @param string      $marker   A string to append to the question and default value
         *                              on display.
         * @param boolean     $hide     Optionally hides what the user types in.
         * @return string  The users input.
         * @see cli\input()
         */
        public static function prompt($question, $default = null, $marker = ': ', $hide = false)
        {
        }
        /**
         * Presents a user with a multiple choice question, useful for 'yes/no' type
         * questions (which this public static function defaults too).
         *
         * @param string  $question  The question to ask the user.
         * @param string  $choice    A string of characters allowed as a response. Case is ignored.
         * @param string  $default   The default choice. NULL if a default is not allowed.
         * @return string  The users choice.
         * @see cli\prompt()
         */
        public static function choose($question, $choice = 'yn', $default = 'n')
        {
        }
        /**
         * Displays an array of strings as a menu where a user can enter a number to
         * choose an option. The array must be a single dimension with either strings
         * or objects with a `__toString()` method.
         *
         * @param array   $items    The list of items the user can choose from.
         * @param string  $default  The index of the default item.
         * @param string  $title    The message displayed to the user when prompted.
         * @return string  The index of the chosen item.
         * @see cli\line()
         * @see cli\input()
         * @see cli\err()
         */
        public static function menu($items, $default = null, $title = 'Choose an item')
        {
        }
        /**
         * Sets one of the streams (input, output, or error) to a `stream` type resource.
         *
         * Valid $whichStream values are:
         *    - 'in'   (default: STDIN)
         *    - 'out'  (default: STDOUT)
         *    - 'err'  (default: STDERR)
         *
         * Any custom streams will be closed for you on shutdown, so please don't close stream
         * resources used with this method.
         *
         * @param string    $whichStream  The stream property to update
         * @param resource  $stream       The new stream resource to use
         * @return void
         * @throws \Exception Thrown if $stream is not a resource of the 'stream' type.
         */
        public static function setStream($whichStream, $stream)
        {
        }
    }
    /**
     * The `Table` class is used to display data in a tabular format.
     */
    class Table
    {
        protected $_renderer;
        protected $_headers = array();
        protected $_footers = array();
        protected $_width = array();
        protected $_rows = array();
        /**
         * Initializes the `Table` class.
         *
         * There are 3 ways to instantiate this class:
         *
         *  1. Pass an array of strings as the first parameter for the column headers
         *     and a 2-dimensional array as the second parameter for the data rows.
         *  2. Pass an array of hash tables (string indexes instead of numerical)
         *     where each hash table is a row and the indexes of the *first* hash
         *     table are used as the header values.
         *  3. Pass nothing and use `setHeaders()` and `addRow()` or `setRows()`.
         *
         * @param array  $headers  Headers used in this table. Optional.
         * @param array  $rows     The rows of data for this table. Optional.
         * @param array  $footers  Footers used in this table. Optional.
         */
        public function __construct(array $headers = null, array $rows = null, array $footers = null)
        {
        }
        public function resetTable()
        {
        }
        /**
         * Sets the renderer used by this table.
         *
         * @param table\Renderer  $renderer  The renderer to use for output.
         * @see   table\Renderer
         * @see   table\Ascii
         * @see   table\Tabular
         */
        public function setRenderer(\cli\table\Renderer $renderer)
        {
        }
        /**
         * Loops through the row and sets the maximum width for each column.
         *
         * @param array  $row  The table row.
         * @return array $row
         */
        protected function checkRow(array $row)
        {
        }
        /**
         * Output the table to `STDOUT` using `cli\line()`.
         *
         * If STDOUT is a pipe or redirected to a file, should output simple
         * tab-separated text. Otherwise, renders table with ASCII table borders
         *
         * @uses cli\Shell::isPiped() Determine what format to output
         *
         * @see cli\Table::renderRow()
         */
        public function display()
        {
        }
        /**
         * Get the table lines to output.
         *
         * @see cli\Table::display()
         * @see cli\Table::renderRow()
         *
         * @return array
         */
        public function getDisplayLines()
        {
        }
        /**
         * Sort the table by a column. Must be called before `cli\Table::display()`.
         *
         * @param int  $column  The index of the column to sort by.
         */
        public function sort($column)
        {
        }
        /**
         * Set the headers of the table.
         *
         * @param array  $headers  An array of strings containing column header names.
         */
        public function setHeaders(array $headers)
        {
        }
        /**
         * Set the footers of the table.
         *
         * @param array  $footers  An array of strings containing column footers names.
         */
        public function setFooters(array $footers)
        {
        }
        /**
         * Add a row to the table.
         *
         * @param array  $row  The row data.
         * @see cli\Table::checkRow()
         */
        public function addRow(array $row)
        {
        }
        /**
         * Clears all previous rows and adds the given rows.
         *
         * @param array  $rows  A 2-dimensional array of row data.
         * @see cli\Table::addRow()
         */
        public function setRows(array $rows)
        {
        }
        public function countRows()
        {
        }
        /**
         * Set whether items in an Ascii table are pre-colorized.
         *
         * @param bool|array $precolorized A boolean to set all columns in the table as pre-colorized, or an array of booleans keyed by column index (number) to set individual columns as pre-colorized.
         * @see cli\Ascii::setPreColorized()
         */
        public function setAsciiPreColorized($pre_colorized)
        {
        }
        /**
         * Is a column in an Ascii table pre-colorized?
         *
         * @param int $column Column index to check.
         * @return bool True if whole Ascii table is marked as pre-colorized, or if the individual column is pre-colorized; else false.
         * @see cli\Ascii::isPreColorized()
         */
        private function isAsciiPreColorized($column)
        {
        }
    }
    /**
     * The `Tree` class is used to display data in a tree-like format.
     */
    class Tree
    {
        protected $_renderer;
        protected $_data = array();
        /**
         * Sets the renderer used by this tree.
         *
         * @param tree\Renderer  $renderer  The renderer to use for output.
         * @see   tree\Renderer
         * @see   tree\Ascii
         * @see   tree\Markdown
         */
        public function setRenderer(\cli\tree\Renderer $renderer)
        {
        }
        /**
         * Set the data.
         * Format:
         *     [
         *         'Label' => [
         *             'Thing' => ['Thing'],
         *         ],
         *         'Thing',
         *     ]
         * @param array $data
         */
        public function setData(array $data)
        {
        }
        /**
         * Render the tree and return it as a string.
         *
         * @return string|null
         */
        public function render()
        {
        }
        /**
         * Display the rendered tree
         */
        public function display()
        {
        }
    }
}
namespace cli\arguments {
    /**
     * Represents an Argument or a value and provides several helpers related to parsing an argument list.
     */
    class Argument extends \cli\Memoize
    {
        /**
         * The canonical name of this argument, used for aliasing.
         *
         * @param string
         */
        public $key;
        private $_argument;
        private $_raw;
        /**
         * @param string  $argument  The raw argument, leading dashes included.
         */
        public function __construct($argument)
        {
        }
        /**
         * Returns the raw input as a string.
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Returns the formatted argument string.
         *
         * @return string
         */
        public function value()
        {
        }
        /**
         * Returns the raw input.
         *
         * @return mixed
         */
        public function raw()
        {
        }
        /**
         * Returns true if the string matches the pattern for long arguments.
         *
         * @return bool
         */
        public function isLong()
        {
        }
        /**
         * Returns true if the string matches the pattern for short arguments.
         *
         * @return bool
         */
        public function isShort()
        {
        }
        /**
         * Returns true if the string matches the pattern for arguments.
         *
         * @return bool
         */
        public function isArgument()
        {
        }
        /**
         * Returns true if the string matches the pattern for values.
         *
         * @return bool
         */
        public function isValue()
        {
        }
        /**
         * Returns true if the argument is short but contains several characters. Each
         * character is considered a separate argument.
         *
         * @return bool
         */
        public function canExplode()
        {
        }
        /**
         * Returns all but the first character of the argument, removing them from the
         * objects representation at the same time.
         *
         * @return array
         */
        public function exploded()
        {
        }
    }
    /**
     * Arguments help screen renderer
     */
    class HelpScreen
    {
        protected $_flags = array();
        protected $_maxFlag = 0;
        protected $_options = array();
        protected $_maxOption = 0;
        public function __construct(\cli\Arguments $arguments)
        {
        }
        public function __toString()
        {
        }
        public function setArguments(\cli\Arguments $arguments)
        {
        }
        public function consumeArgumentFlags(\cli\Arguments $arguments)
        {
        }
        public function consumeArgumentOptions(\cli\Arguments $arguments)
        {
        }
        public function render()
        {
        }
        private function _renderFlags()
        {
        }
        private function _renderOptions()
        {
        }
        private function _renderScreen($options, $max)
        {
        }
        private function _consume($options)
        {
        }
    }
    /**
     * Thrown when undefined arguments are detected in strict mode.
     */
    class InvalidArguments extends \InvalidArgumentException
    {
        protected $arguments;
        /**
         * @param array  $arguments  A list of arguments that do not fit the profile.
         */
        public function __construct(array $arguments)
        {
        }
        /**
         * Get the arguments that caused the exception.
         *
         * @return array
         */
        public function getArguments()
        {
        }
        private function _generateMessage()
        {
        }
    }
    class Lexer extends \cli\Memoize implements \Iterator
    {
        private $_items = array();
        private $_index = 0;
        private $_length = 0;
        private $_first = true;
        /**
         * @param array  $items  A list of strings to process as tokens.
         */
        public function __construct(array $items)
        {
        }
        /**
         * The current token.
         *
         * @return string
         */
        public function current()
        {
        }
        /**
         * Peek ahead to the next token without moving the cursor.
         *
         * @return Argument
         */
        public function peek()
        {
        }
        /**
         * Move the cursor forward 1 element if it is valid.
         */
        public function next()
        {
        }
        /**
         * Return the current position of the cursor.
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Move forward 1 element and, if the method hasn't been called before, reset
         * the cursor's position to 0.
         */
        public function rewind()
        {
        }
        /**
         * Returns true if the cursor has not reached the end of the list.
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Push an element to the front of the stack.
         *
         * @param mixed  $item  The value to set
         */
        public function unshift($item)
        {
        }
        /**
         * Returns true if the cursor is at the end of the list.
         *
         * @return bool
         */
        public function end()
        {
        }
        private function _shift()
        {
        }
        private function _explode()
        {
        }
    }
}
namespace cli\notify {
    /**
     * A Notifer that displays a string of periods.
     */
    class Dots extends \cli\Notify
    {
        protected $_dots;
        protected $_format = '{:msg}{:dots}  ({:elapsed}, {:speed}/s)';
        protected $_iteration;
        /**
         * Instatiates a Notification object.
         *
         * @param string  $msg       The text to display next to the Notifier.
         * @param int     $dots      The number of dots to iterate through.
         * @param int     $interval  The interval in milliseconds between updates.
         * @throws \InvalidArgumentException
         */
        public function __construct($msg, $dots = 3, $interval = 100)
        {
        }
        /**
         * Prints the correct number of dots to `STDOUT` with the time elapsed and
         * tick speed.
         *
         * @param boolean  $finish  `true` if this was called from
         *                          `cli\Notify::finish()`, `false` otherwise.
         * @see cli\out_padded()
         * @see cli\Notify::formatTime()
         * @see cli\Notify::speed()
         */
        public function display($finish = false)
        {
        }
    }
    /**
     * The `Spinner` Notifier displays an ASCII spinner.
     */
    class Spinner extends \cli\Notify
    {
        protected $_chars = '-\\|/';
        protected $_format = '{:msg} {:char}  ({:elapsed}, {:speed}/s)';
        protected $_iteration = 0;
        /**
         * Prints the current spinner position to `STDOUT` with the time elapsed
         * and tick speed.
         *
         * @param boolean  $finish  `true` if this was called from
         *                          `cli\Notify::finish()`, `false` otherwise.
         * @see cli\out_padded()
         * @see cli\Notify::formatTime()
         * @see cli\Notify::speed()
         */
        public function display($finish = false)
        {
        }
    }
}
namespace cli\progress {
    /**
     * Displays a progress bar spanning the entire shell.
     *
     * Basic format:
     *
     *   ^MSG  PER% [=======================            ]  00:00 / 00:00$
     */
    class Bar extends \cli\Progress
    {
        protected $_bars = '=>';
        protected $_formatMessage = '{:msg}  {:percent}% [';
        protected $_formatTiming = '] {:elapsed} / {:estimated}';
        protected $_format = '{:msg}{:bar}{:timing}';
        /**
         * Prints the progress bar to the screen with percent complete, elapsed time
         * and estimated total time.
         *
         * @param boolean  $finish  `true` if this was called from
         *                          `cli\Notify::finish()`, `false` otherwise.
         * @see cli\out()
         * @see cli\Notify::formatTime()
         * @see cli\Notify::elapsed()
         * @see cli\Progress::estimated();
         * @see cli\Progress::percent()
         * @see cli\Shell::columns()
         */
        public function display($finish = false)
        {
        }
        /**
         * This method augments the base definition from cli\Notify to optionally
         * allow passing a new message.
         *
         * @param int    $increment The amount to increment by.
         * @param string $msg       The text to display next to the Notifier. (optional)
         * @see cli\Notify::tick()
         */
        public function tick($increment = 1, $msg = null)
        {
        }
    }
}
namespace cli\table {
    /**
     * Table renderers are used to change how a table is displayed.
     */
    abstract class Renderer
    {
        protected $_widths = array();
        public function __construct(array $widths = array())
        {
        }
        /**
         * Set the widths of each column in the table.
         *
         * @param array  $widths    The widths of the columns.
         * @param bool   $fallback  Whether to use these values as fallback only.
         */
        public function setWidths(array $widths, $fallback = false)
        {
        }
        /**
         * Render a border for the top and bottom and separating the headers from the
         * table rows.
         *
         * @return string  The table border.
         */
        public function border()
        {
        }
        /**
         * Renders a row for output.
         *
         * @param array  $row  The table row.
         * @return string  The formatted table row.
         */
        public abstract function row(array $row);
    }
    /**
     * The ASCII renderer renders tables with ASCII borders.
     */
    class Ascii extends \cli\table\Renderer
    {
        protected $_characters = array('corner' => '+', 'line' => '-', 'border' => '|', 'padding' => ' ');
        protected $_border = null;
        protected $_constraintWidth = null;
        protected $_pre_colorized = false;
        /**
         * Set the widths of each column in the table.
         *
         * @param array  $widths    The widths of the columns.
         * @param bool   $fallback  Whether to use these values as fallback only.
         */
        public function setWidths(array $widths, $fallback = false)
        {
        }
        /**
         * Set the constraint width for the table
         *
         * @param int $constraintWidth
         */
        public function setConstraintWidth($constraintWidth)
        {
        }
        /**
         * Set the characters used for rendering the Ascii table.
         *
         * The keys `corner`, `line` and `border` are used in rendering.
         *
         * @param $characters  array  Characters used in rendering.
         */
        public function setCharacters(array $characters)
        {
        }
        /**
         * Render a border for the top and bottom and separating the headers from the
         * table rows.
         *
         * @return string  The table border.
         */
        public function border()
        {
        }
        /**
         * Renders a row for output.
         *
         * @param array  $row  The table row.
         * @return string  The formatted table row.
         */
        public function row(array $row)
        {
        }
        private function padColumn($content, $column)
        {
        }
        /**
         * Set whether items are pre-colorized.
         *
         * @param bool|array $colorized A boolean to set all columns in the table as pre-colorized, or an array of booleans keyed by column index (number) to set individual columns as pre-colorized.
         */
        public function setPreColorized($pre_colorized)
        {
        }
        /**
         * Is a column pre-colorized?
         *
         * @param int $column Column index to check.
         * @return bool True if whole table is marked as pre-colorized, or if the individual column is pre-colorized; else false.
         */
        public function isPreColorized($column)
        {
        }
    }
    /**
     * The tabular renderer is used for displaying data in a tabular format.
     */
    class Tabular extends \cli\table\Renderer
    {
        /**
         * Renders a row for output.
         *
         * @param array  $row  The table row.
         * @return string  The formatted table row.
         */
        public function row(array $row)
        {
        }
    }
}
namespace cli\tree {
    /**
     * Tree renderers are used to change how a tree is displayed.
     */
    abstract class Renderer
    {
        /**
         * @param array $tree
         * @return string|null
         */
        public abstract function render(array $tree);
    }
    /**
     * The ASCII renderer renders trees with ASCII lines.
     */
    class Ascii extends \cli\tree\Renderer
    {
        /**
         * @param array $tree
         * @return string
         */
        public function render(array $tree)
        {
        }
    }
    /**
     * The ASCII renderer renders trees with ASCII lines.
     */
    class Markdown extends \cli\tree\Renderer
    {
        /**
         * How many spaces to indent by
         * @var int
         */
        protected $_padding = 2;
        /**
         * @param int $padding Optional. Default 2.
         */
        function __construct($padding = null)
        {
        }
        /**
         * Renders the tree
         *
         * @param array $tree
         * @param int $level Optional
         * @return string
         */
        public function render(array $tree, $level = 0)
        {
        }
    }
}
namespace {
    /**
     * Lists or flushes the site's rewrite rules, updates the permalink structure.
     *
     * See the WordPress [Rewrite API](https://codex.wordpress.org/Rewrite_API) and
     * [WP Rewrite](https://codex.wordpress.org/Class_Reference/WP_Rewrite) class reference.
     *
     * ## EXAMPLES
     *
     *     # Flush rewrite rules
     *     $ wp rewrite flush
     *     Success: Rewrite rules flushed.
     *
     *     # Update permalink structure
     *     $ wp rewrite structure '/%year%/%monthnum%/%postname%'
     *     Success: Rewrite structure set.
     *
     *     # List rewrite rules
     *     $ wp rewrite list --format=csv
     *     match,query,source
     *     ^wp-json/?$,index.php?rest_route=/,other
     *     ^wp-json/(.*)?,index.php?rest_route=/$matches[1],other
     *     category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&feed=$matches[2],category
     *     category/(.+?)/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&feed=$matches[2],category
     *     category/(.+?)/embed/?$,index.php?category_name=$matches[1]&embed=true,category
     *
     * @package wp-cli
     */
    class Rewrite_Command extends \WP_CLI_Command
    {
        /**
         * Flushes rewrite rules.
         *
         * Resets WordPress' rewrite rules based on registered post types, etc.
         *
         * To regenerate a .htaccess file with WP-CLI, you'll need to add the mod_rewrite module
         * to your wp-cli.yml or config.yml. For example:
         *
         * ```
         * apache_modules:
         *   - mod_rewrite
         * ```
         *
         * ## OPTIONS
         *
         * [--hard]
         * : Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database. Works only on single site installs.
         *
         * ## EXAMPLES
         *
         *     $ wp rewrite flush
         *     Success: Rewrite rules flushed.
         */
        public function flush($args, $assoc_args)
        {
        }
        /**
         * Updates the permalink structure.
         *
         * Sets the post permalink structure to the specified pattern.
         *
         * To regenerate a .htaccess file with WP-CLI, you'll need to add
         * the mod_rewrite module to your [WP-CLI config](https://make.wordpress.org/cli/handbook/config/#config-files).
         * For example:
         *
         * ```
         * apache_modules:
         *   - mod_rewrite
         * ```
         *
         * ## OPTIONS
         *
         * <permastruct>
         * : The new permalink structure to apply.
         *
         * [--category-base=<base>]
         * : Set the base for category permalinks, i.e. '/category/'.
         *
         * [--tag-base=<base>]
         * : Set the base for tag permalinks, i.e. '/tag/'.
         *
         * [--hard]
         * : Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database.
         *
         * ## EXAMPLES
         *
         *     $ wp rewrite structure '/%year%/%monthnum%/%postname%/'
         *     Success: Rewrite structure set.
         */
        public function structure($args, $assoc_args)
        {
        }
        /**
         * Gets a list of the current rewrite rules.
         *
         * ## OPTIONS
         *
         * [--match=<url>]
         * : Show rewrite rules matching a particular URL.
         *
         * [--source=<source>]
         * : Show rewrite rules from a particular source.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields. Defaults to match,query,source.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     $ wp rewrite list --format=csv
         *     match,query,source
         *     ^wp-json/?$,index.php?rest_route=/,other
         *     ^wp-json/(.*)?,index.php?rest_route=/$matches[1],other
         *     category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&feed=$matches[2],category
         *     category/(.+?)/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&feed=$matches[2],category
         *     category/(.+?)/embed/?$,index.php?category_name=$matches[1]&embed=true,category
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Exposes apache modules if present in config
         *
         * Implementation Notes: This function exposes a global function
         * apache_get_modules and also sets the $is_apache global variable.
         *
         * This is so that flush_rewrite_rules will actually write out the
         * .htaccess file for apache WordPress installations. There is a check
         * to see:
         *
         * 1. if the $is_apache variable is set.
         * 2. if the mod_rewrite module is returned from the apache_get_modules
         *    function.
         *
         * To get this to work with wp-cli you'll need to add the mod_rewrite module
         * to your config.yml. For example
         *
         * ```
         * apache_modules:
         *   - mod_rewrite
         * ```
         *
         * If this isn't done then the .htaccess rewrite rules won't be flushed out
         * to disk.
         */
        private static function apache_modules()
        {
        }
        /**
         * Displays a warning if --skip-plugins or --skip-themes are in use.
         *
         * Skipping the loading of plugins or themes can mean some rewrite rules
         * are unregistered, which may cause erroneous behavior.
         */
        private static function check_skip_plugins_themes()
        {
        }
    }
    /**
     * Adds, removes, and lists capabilities of a user role.
     *
     * See references for [Roles and Capabilities](https://codex.wordpress.org/Roles_and_Capabilities) and [WP User class](https://codex.wordpress.org/Class_Reference/WP_User).
     *
     * ## EXAMPLES
     *
     *     # Add 'spectate' capability to 'author' role.
     *     $ wp cap add 'author' 'spectate'
     *     Success: Added 1 capability to 'author' role.
     *
     *     # Add all caps from 'editor' role to 'author' role.
     *     $ wp cap list 'editor' | xargs wp cap add 'author'
     *     Success: Added 24 capabilities to 'author' role.
     *
     *     # Remove all caps from 'editor' role that also appear in 'author' role.
     *     $ wp cap list 'author' | xargs wp cap remove 'editor'
     *     Success: Removed 34 capabilities from 'editor' role.
     */
    class Capabilities_Command extends \WP_CLI_Command
    {
        /**
         * List of available fields.
         *
         * @var array
         */
        private $fields = ['name'];
        /**
         * Lists capabilities for a given role.
         *
         * ## OPTIONS
         *
         * <role>
         * : Key for the role.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: list
         * options:
         *   - list
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * [--show-grant]
         * : Display all capabilities defined for a role including grant.
         * ---
         * default: false
         * ---
         *
         * ## EXAMPLES
         *
         *     # Display alphabetical list of Contributor capabilities.
         *     $ wp cap list 'contributor' | sort
         *     delete_posts
         *     edit_posts
         *     level_0
         *     level_1
         *     read
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Adds capabilities to a given role.
         *
         * ## OPTIONS
         *
         * <role>
         * : Key for the role.
         *
         * <cap>...
         * : One or more capabilities to add.
         *
         * [--grant]
         * : Adds the capability as an explicit boolean value, instead of implicitly defaulting to `true`.
         * ---
         * default: true
         * options:
         *   - true
         *   - false
         * ---
         *
         * ## EXAMPLES
         *
         *     # Add 'spectate' capability to 'author' role.
         *     $ wp cap add author spectate
         *     Success: Added 1 capability to 'author' role.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Removes capabilities from a given role.
         *
         * ## OPTIONS
         *
         * <role>
         * : Key for the role.
         *
         * <cap>...
         * : One or more capabilities to remove.
         *
         * ## EXAMPLES
         *
         *     # Remove 'spectate' capability from 'author' role.
         *     $ wp cap remove author spectate
         *     Success: Removed 1 capability from 'author' role.
         */
        public function remove($args)
        {
        }
        /**
         * Retrieve a specific role from the system.
         *
         * @param string $role Role to retrieve.
         * @return WP_Role Requested role.
         * @throws \WP_CLI\ExitException If the role could not be found.
         */
        private static function get_role($role)
        {
        }
        /**
         * Assert that the roles are persisted to the database.
         *
         * @throws \WP_CLI\ExitException If the roles are not persisted to the
         *                               database.
         */
        private static function persistence_check()
        {
        }
    }
    /**
     * Manages user roles, including creating new roles and resetting to defaults.
     *
     * See references for [Roles and Capabilities](https://codex.wordpress.org/Roles_and_Capabilities) and [WP User class](https://codex.wordpress.org/Class_Reference/WP_User).
     *
     * ## EXAMPLES
     *
     *     # List roles.
     *     $ wp role list --fields=role --format=csv
     *     role
     *     administrator
     *     editor
     *     author
     *     contributor
     *     subscriber
     *
     *     # Check to see if a role exists.
     *     $ wp role exists editor
     *     Success: Role with ID 'editor' exists.
     *
     *     # Create a new role.
     *     $ wp role create approver Approver
     *     Success: Role with key 'approver' created.
     *
     *     # Delete an existing role.
     *     $ wp role delete approver
     *     Success: Role with key 'approver' deleted.
     *
     *     # Reset existing roles to their default capabilities.
     *     $ wp role reset administrator author contributor
     *     Success: Reset 3/3 roles.
     *
     * @package wp-cli
     */
    class Role_Command extends \WP_CLI_Command
    {
        /**
         * List of available fields.
         *
         * @var array
         */
        private $fields = ['name', 'role'];
        /**
         * Default roles as provided by WordPress Core.
         *
         * @var array
         */
        private $roles = ['administrator', 'editor', 'author', 'contributor', 'subscriber'];
        /**
         * Lists all roles.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--field=<field>]
         * : Prints the value of a single field.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each role:
         *
         * * name
         * * role
         *
         * There are no optional fields.
         *
         * ## EXAMPLES
         *
         *     # List roles.
         *     $ wp role list --fields=role --format=csv
         *     role
         *     administrator
         *     editor
         *     author
         *     contributor
         *     subscriber
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Checks if a role exists.
         *
         * Exits with return code 0 if the role exists, 1 if it does not.
         *
         * ## OPTIONS
         *
         * <role-key>
         * : The internal name of the role.
         *
         * ## EXAMPLES
         *
         *     # Check if a role exists.
         *     $ wp role exists editor
         *     Success: Role with ID 'editor' exists.
         */
        public function exists($args)
        {
        }
        /**
         * Creates a new role.
         *
         * ## OPTIONS
         *
         * <role-key>
         * : The internal name of the role.
         *
         * <role-name>
         * : The publicly visible name of the role.
         *
         * [--clone=<role>]
         * : Clone capabilities from an existing role.
         *
         * ## EXAMPLES
         *
         *     # Create role for Approver.
         *     $ wp role create approver Approver
         *     Success: Role with key 'approver' created.
         *
         *     # Create role for Product Administrator.
         *     $ wp role create productadmin "Product Administrator"
         *     Success: Role with key 'productadmin' created.
         */
        public function create($args, $assoc_args)
        {
        }
        /**
         * Deletes an existing role.
         *
         * ## OPTIONS
         *
         * <role-key>
         * : The internal name of the role.
         *
         * ## EXAMPLES
         *
         *     # Delete approver role.
         *     $ wp role delete approver
         *     Success: Role with key 'approver' deleted.
         *
         *     # Delete productadmin role.
         *     wp role delete productadmin
         *     Success: Role with key 'productadmin' deleted.
         */
        public function delete($args)
        {
        }
        /**
         * Resets any default role to default capabilities.
         *
         * ## OPTIONS
         *
         * [<role-key>...]
         * : The internal name of one or more roles to reset.
         *
         * [--all]
         * : If set, all default roles will be reset.
         *
         * ## EXAMPLES
         *
         *     # Reset role.
         *     $ wp role reset administrator author contributor
         *     Success: Reset 1/3 roles.
         *
         *     # Reset all default roles.
         *     $ wp role reset --all
         *     Success: All default roles reset.
         */
        public function reset($args, $assoc_args)
        {
        }
        /**
         * Assert that the roles are persisted to the database.
         *
         * @throws \WP_CLI\ExitException If the roles are not persisted to the
         *                               database.
         */
        private static function persistence_check()
        {
        }
    }
    /**
     * Generates code for post types, taxonomies, plugins, child themes, etc.
     *
     * ## EXAMPLES
     *
     *     # Generate a new plugin with unit tests
     *     $ wp scaffold plugin sample-plugin
     *     Success: Created plugin files.
     *     Success: Created test files.
     *
     *     # Generate theme based on _s
     *     $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
     *     Success: Created theme 'Sample Theme'.
     *
     *     # Generate code for post type registration in given theme
     *     $ wp scaffold post-type movie --label=Movie --theme=simple-life
     *     Success: Created /var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php
     *
     * @package wp-cli
     */
    class Scaffold_Command extends \WP_CLI_Command
    {
        /**
         * Generates PHP code for registering a custom post type.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The internal name of the post type.
         *
         * [--label=<label>]
         * : The text used to translate the update messages.
         *
         * [--textdomain=<textdomain>]
         * : The textdomain to use for the labels.
         *
         * [--dashicon=<dashicon>]
         * : The dashicon to use in the menu.
         *
         * [--theme]
         * : Create a file in the active theme directory, instead of sending to
         * STDOUT. Specify a theme with `--theme=<theme>` to have the file placed in that theme.
         *
         * [--plugin=<plugin>]
         * : Create a file in the given plugin's directory, instead of sending to STDOUT.
         *
         * [--raw]
         * : Just generate the `register_post_type()` call and nothing else.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate a 'movie' post type for the 'simple-life' theme
         *     $ wp scaffold post-type movie --label=Movie --theme=simple-life
         *     Success: Created '/var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php'.
         *
         * @subcommand post-type
         *
         * @alias      cpt
         */
        public function post_type($args, $assoc_args)
        {
        }
        /**
         * Generates PHP code for registering a custom taxonomy.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The internal name of the taxonomy.
         *
         * [--post_types=<post-types>]
         * : Post types to register for use with the taxonomy.
         *
         * [--label=<label>]
         * : The text used to translate the update messages.
         *
         * [--textdomain=<textdomain>]
         * : The textdomain to use for the labels.
         *
         * [--theme]
         * : Create a file in the active theme directory, instead of sending to
         * STDOUT. Specify a theme with `--theme=<theme>` to have the file placed in that theme.
         *
         * [--plugin=<plugin>]
         * : Create a file in the given plugin's directory, instead of sending to STDOUT.
         *
         * [--raw]
         * : Just generate the `register_taxonomy()` call and nothing else.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate PHP code for registering a custom taxonomy and save in a file
         *     $ wp scaffold taxonomy venue --post_types=event,presentation > taxonomy.php
         *
         * @subcommand taxonomy
         *
         * @alias      tax
         */
        public function taxonomy($args, $assoc_args)
        {
        }
        private function scaffold($slug, $assoc_args, $defaults, $subdir, $templates)
        {
        }
        /**
         * Generates PHP, JS and CSS code for registering a Gutenberg block for a plugin or theme.
         *
         * Blocks are the fundamental element of the Gutenberg editor. They are the primary way in which plugins and themes can register their own functionality and extend the capabilities of the editor.
         *
         * Visit the [Gutenberg handbook](https://wordpress.org/gutenberg/handbook/block-api/) to learn more about Block API.
         *
         * When you scaffold a block you must use either the theme or plugin option. The latter is recommended.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The internal name of the block.
         *
         * [--title=<title>]
         * : The display title for your block.
         *
         * [--dashicon=<dashicon>]
         * : The dashicon to make it easier to identify your block.
         *
         * [--category=<category>]
         * : The category name to help users browse and discover your block.
         * ---
         * default: widgets
         * options:
         *   - common
         *   - embed
         *   - formatting
         *   - layout
         *   - widgets
         * ---
         *
         * [--theme]
         * : Create files in the active theme directory. Specify a theme with `--theme=<theme>` to have the file placed in that theme.
         *
         * [--plugin=<plugin>]
         * : Create files in the given plugin's directory.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate a 'movie' block for the 'movies' plugin
         *     $ wp scaffold block movie --title="Movie block" --plugin=movies
         *     Success: Created block 'Movie block'.
         *
         *     # Generate a 'movie' block for the 'simple-life' theme
         *     $ wp scaffold block movie --title="Movie block" --theme=simple-life
         *      Success: Created block 'Movie block'.
         *
         *     # Create a new plugin and add two blocks
         *     # Create plugin called books
         *     $ wp scaffold plugin books
         *     # Add a block called book to plugin books
         *     $ wp scaffold block book --title="Book" --plugin=books
         *     # Add a second block to plugin called books.
         *     $ wp scaffold block books --title="Book List" --plugin=books
         *
         * @subcommand block
         */
        public function block($args, $assoc_args)
        {
        }
        /**
         * Generates starter code for a theme based on _s.
         *
         * See the [Underscores website](https://underscores.me/) for more details.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The slug for the new theme, used for prefixing functions.
         *
         * [--activate]
         * : Activate the newly downloaded theme.
         *
         * [--enable-network]
         * : Enable the newly downloaded theme for the entire network.
         *
         * [--theme_name=<title>]
         * : What to put in the 'Theme Name:' header in 'style.css'.
         *
         * [--author=<full-name>]
         * : What to put in the 'Author:' header in 'style.css'.
         *
         * [--author_uri=<uri>]
         * : What to put in the 'Author URI:' header in 'style.css'.
         *
         * [--sassify]
         * : Include stylesheets as SASS.
         *
         * [--woocommerce]
         * : Include WooCommerce boilerplate files.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate a theme with name "Sample Theme" and author "John Doe"
         *     $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
         *     Success: Created theme 'Sample Theme'.
         *
         * @alias _s
         */
        public function underscores($args, $assoc_args)
        {
        }
        /**
         * Generates child theme based on an existing theme.
         *
         * Creates a child theme folder with `functions.php` and `style.css` files.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The slug for the new child theme.
         *
         * --parent_theme=<slug>
         * : What to put in the 'Template:' header in 'style.css'.
         *
         * [--theme_name=<title>]
         * : What to put in the 'Theme Name:' header in 'style.css'.
         *
         * [--author=<full-name>]
         * : What to put in the 'Author:' header in 'style.css'.
         *
         * [--author_uri=<uri>]
         * : What to put in the 'Author URI:' header in 'style.css'.
         *
         * [--theme_uri=<uri>]
         * : What to put in the 'Theme URI:' header in 'style.css'.
         *
         * [--activate]
         * : Activate the newly created child theme.
         *
         * [--enable-network]
         * : Enable the newly created child theme for the entire network.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate a 'sample-theme' child theme based on TwentySixteen
         *     $ wp scaffold child-theme sample-theme --parent_theme=twentysixteen
         *     Success: Created '/var/www/example.com/public_html/wp-content/themes/sample-theme'.
         *
         * @subcommand child-theme
         */
        public function child_theme($args, $assoc_args)
        {
        }
        private function get_output_path($assoc_args, $subdir)
        {
        }
        /**
         * Generates starter code for a plugin.
         *
         * The following files are always generated:
         *
         * * `plugin-slug.php` is the main PHP plugin file.
         * * `readme.txt` is the readme file for the plugin.
         * * `package.json` needed by NPM holds various metadata relevant to the project. Packages: `grunt`, `grunt-wp-i18n` and `grunt-wp-readme-to-markdown`. Scripts: `start`, `readme`, `i18n`.
         * * `Gruntfile.js` is the JS file containing Grunt tasks. Tasks: `i18n` containing `addtextdomain` and `makepot`, `readme` containing `wp_readme_to_markdown`.
         * * `.editorconfig` is the configuration file for Editor.
         * * `.gitignore` tells which files (or patterns) git should ignore.
         * * `.distignore` tells which files and folders should be ignored in distribution.
         *
         * The following files are also included unless the `--skip-tests` is used:
         *
         * * `phpunit.xml.dist` is the configuration file for PHPUnit.
         * * `.travis.yml` is the configuration file for Travis CI. Use `--ci=<provider>` to select a different service.
         * * `bin/install-wp-tests.sh` configures the WordPress test suite and a test database.
         * * `tests/bootstrap.php` is the file that makes the current plugin active when running the test suite.
         * * `tests/test-sample.php` is a sample file containing test cases.
         * * `.phpcs.xml.dist` is a collection of PHP_CodeSniffer rules.
         *
         * ## OPTIONS
         *
         * <slug>
         * : The internal name of the plugin.
         *
         * [--dir=<dirname>]
         * : Put the new plugin in some arbitrary directory path. Plugin directory will be path plus supplied slug.
         *
         * [--plugin_name=<title>]
         * : What to put in the 'Plugin Name:' header.
         *
         * [--plugin_description=<description>]
         * : What to put in the 'Description:' header.
         *
         * [--plugin_author=<author>]
         * : What to put in the 'Author:' header.
         *
         * [--plugin_author_uri=<url>]
         * : What to put in the 'Author URI:' header.
         *
         * [--plugin_uri=<url>]
         * : What to put in the 'Plugin URI:' header.
         *
         * [--skip-tests]
         * : Don't generate files for unit testing.
         *
         * [--ci=<provider>]
         * : Choose a configuration file for a continuous integration provider.
         * ---
         * default: travis
         * options:
         *   - travis
         *   - circle
         *   - gitlab
         * ---
         *
         * [--activate]
         * : Activate the newly generated plugin.
         *
         * [--activate-network]
         * : Network activate the newly generated plugin.
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     $ wp scaffold plugin sample-plugin
         *     Success: Created plugin files.
         *     Success: Created test files.
         */
        public function plugin($args, $assoc_args)
        {
        }
        /**
         * Generates files needed for running PHPUnit tests in a plugin.
         *
         * The following files are generated by default:
         *
         * * `phpunit.xml.dist` is the configuration file for PHPUnit.
         * * `.travis.yml` is the configuration file for Travis CI. Use `--ci=<provider>` to select a different service.
         * * `bin/install-wp-tests.sh` configures the WordPress test suite and a test database.
         * * `tests/bootstrap.php` is the file that makes the current plugin active when running the test suite.
         * * `tests/test-sample.php` is a sample file containing the actual tests.
         * * `.phpcs.xml.dist` is a collection of PHP_CodeSniffer rules.
         *
         * Learn more from the [plugin unit tests documentation](https://make.wordpress.org/cli/handbook/plugin-unit-tests/).
         *
         * ## ENVIRONMENT
         *
         * The `tests/bootstrap.php` file looks for the WP_TESTS_DIR environment
         * variable.
         *
         * ## OPTIONS
         *
         * [<plugin>]
         * : The name of the plugin to generate test files for.
         *
         * [--dir=<dirname>]
         * : Generate test files for a non-standard plugin path. If no plugin slug is specified, the directory name is used.
         *
         * [--ci=<provider>]
         * : Choose a configuration file for a continuous integration provider.
         * ---
         * default: travis
         * options:
         *   - travis
         *   - circle
         *   - gitlab
         *   - bitbucket
         * ---
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate unit test files for plugin 'sample-plugin'.
         *     $ wp scaffold plugin-tests sample-plugin
         *     Success: Created test files.
         *
         * @subcommand plugin-tests
         */
        public function plugin_tests($args, $assoc_args)
        {
        }
        /**
         * Generates files needed for running PHPUnit tests in a theme.
         *
         * The following files are generated by default:
         *
         * * `phpunit.xml.dist` is the configuration file for PHPUnit.
         * * `.travis.yml` is the configuration file for Travis CI. Use `--ci=<provider>` to select a different service.
         * * `bin/install-wp-tests.sh` configures the WordPress test suite and a test database.
         * * `tests/bootstrap.php` is the file that makes the current theme active when running the test suite.
         * * `tests/test-sample.php` is a sample file containing the actual tests.
         * * `.phpcs.xml.dist` is a collection of PHP_CodeSniffer rules.
         *
         * Learn more from the [plugin unit tests documentation](https://make.wordpress.org/cli/handbook/plugin-unit-tests/).
         *
         * ## ENVIRONMENT
         *
         * The `tests/bootstrap.php` file looks for the WP_TESTS_DIR environment
         * variable.
         *
         * ## OPTIONS
         *
         * [<theme>]
         * : The name of the theme to generate test files for.
         *
         * [--dir=<dirname>]
         * : Generate test files for a non-standard theme path. If no theme slug is specified, the directory name is used.
         *
         * [--ci=<provider>]
         * : Choose a configuration file for a continuous integration provider.
         * ---
         * default: travis
         * options:
         *   - travis
         *   - circle
         *   - gitlab
         *   - bitbucket
         * ---
         *
         * [--force]
         * : Overwrite files that already exist.
         *
         * ## EXAMPLES
         *
         *     # Generate unit test files for theme 'twentysixteenchild'.
         *     $ wp scaffold theme-tests twentysixteenchild
         *     Success: Created test files.
         *
         * @subcommand theme-tests
         */
        public function theme_tests($args, $assoc_args)
        {
        }
        private function scaffold_plugin_theme_tests($args, $assoc_args, $type)
        {
        }
        /**
         * Checks that the `$target_dir` is a child directory of the WP themes or plugins directory, depending on `$type`.
         *
         * @param string $type       "theme" or "plugin"
         * @param string $target_dir The theme/plugin directory to check.
         *
         * @return null|string Returns null on success, error message on error.
         */
        private function check_target_directory($type, $target_dir)
        {
        }
        protected function create_files($files_and_contents, $force)
        {
        }
        protected function prompt_if_files_will_be_overwritten($filename, $force)
        {
        }
        protected function log_whether_files_written($files_written, $skip_message, $success_message)
        {
        }
        /**
         * Extracts dashicon name when provided or return null otherwise.
         *
         * @param array $assoc_args
         * @return string|null
         */
        private function extract_dashicon($assoc_args)
        {
        }
        /**
         * If you're writing your files to your theme directory your textdomain also needs to be the same as your theme.
         * Same goes for when plugin is being used.
         */
        private function get_textdomain($textdomain, $args)
        {
        }
        /**
         * Generates the machine name for function declarations.
         *
         * @param string $slug Slug name to convert.
         * @return string
         */
        private function generate_machine_name($slug)
        {
        }
        /**
         * Pluralizes a noun.
         *
         * @see    Inflector::pluralize()
         * @param  string $word Word to be pluralized.
         * @return string
         */
        private function pluralize($word)
        {
        }
        protected function extract_args($assoc_args, $defaults)
        {
        }
        protected function quote_comma_list_elements($comma_list)
        {
        }
        /**
         * Creates the themes directory if it doesn't already exist.
         */
        protected function maybe_create_themes_dir()
        {
        }
        /**
         * Creates the plugins directory if it doesn't already exist.
         */
        protected function maybe_create_plugins_dir()
        {
        }
        /**
         * Initializes WP_Filesystem.
         */
        protected function init_wp_filesystem()
        {
        }
        /**
         * Localizes the template path.
         */
        private static function mustache_render($template, $data = array())
        {
        }
        /**
         * Gets the template path based on installation type.
         */
        private static function get_template_path($template)
        {
        }
        /*
         * Returns the canonicalized path, with dot and double dot segments resolved.
         *
         * Copied from Symfony\Component\DomCrawler\AbstractUriElement::canonicalizePath().
         * Implements RFC 3986, section 5.2.4.
         *
         * @param string $path The path to make canonical.
         *
         * @return string The canonicalized path.
         */
        private static function canonicalize_path($path)
        {
        }
        /**
         * Gets an active theme's name when true provided or the same name otherwise.
         *
         * @param string|bool $theme Theme name or true.
         * @return string
         */
        private function get_theme_name($theme)
        {
        }
    }
    class Search_Replace_Command extends \WP_CLI_Command
    {
        private $dry_run;
        private $export_handle = \false;
        private $export_insert_size;
        private $recurse_objects;
        private $regex;
        private $regex_flags;
        private $regex_delimiter;
        private $regex_limit = -1;
        private $skip_tables;
        private $skip_columns;
        private $include_columns;
        private $format;
        private $report;
        private $report_changed_only;
        private $log_handle = \null;
        private $log_before_context = 40;
        private $log_after_context = 40;
        private $log_prefixes = array('< ', '> ');
        private $log_colors;
        private $log_encoding;
        /**
         * Searches/replaces strings in the database.
         *
         * Searches through all rows in a selection of tables and replaces
         * appearances of the first string with the second string.
         *
         * By default, the command uses tables registered to the `$wpdb` object. On
         * multisite, this will just be the tables for the current site unless
         * `--network` is specified.
         *
         * Search/replace intelligently handles PHP serialized data, and does not
         * change primary key values.
         *
         * ## OPTIONS
         *
         * <old>
         * : A string to search for within the database.
         *
         * <new>
         * : Replace instances of the first string with this new string.
         *
         * [<table>...]
         * : List of database tables to restrict the replacement to. Wildcards are
         * supported, e.g. `'wp_*options'` or `'wp_post*'`.
         *
         * [--dry-run]
         * : Run the entire search/replace operation and show report, but don't save
         * changes to the database.
         *
         * [--network]
         * : Search/replace through all the tables registered to $wpdb in a
         * multisite install.
         *
         * [--all-tables-with-prefix]
         * : Enable replacement on any tables that match the table prefix even if
         * not registered on $wpdb.
         *
         * [--all-tables]
         * : Enable replacement on ALL tables in the database, regardless of the
         * prefix, and even if not registered on $wpdb. Overrides --network
         * and --all-tables-with-prefix.
         *
         * [--export[=<file>]]
         * : Write transformed data as SQL file instead of saving replacements to
         * the database. If <file> is not supplied, will output to STDOUT.
         *
         * [--export_insert_size=<rows>]
         * : Define number of rows in single INSERT statement when doing SQL export.
         * You might want to change this depending on your database configuration
         * (e.g. if you need to do fewer queries). Default: 50
         *
         * [--skip-tables=<tables>]
         * : Do not perform the replacement on specific tables. Use commas to
         * specify multiple tables. Wildcards are supported, e.g. `'wp_*options'` or `'wp_post*'`.
         *
         * [--skip-columns=<columns>]
         * : Do not perform the replacement on specific columns. Use commas to
         * specify multiple columns.
         *
         * [--include-columns=<columns>]
         * : Perform the replacement on specific columns. Use commas to
         * specify multiple columns.
         *
         * [--precise]
         * : Force the use of PHP (instead of SQL) which is more thorough,
         * but slower.
         *
         * [--recurse-objects]
         * : Enable recursing into objects to replace strings. Defaults to true;
         * pass --no-recurse-objects to disable.
         *
         * [--verbose]
         * : Prints rows to the console as they're updated.
         *
         * [--regex]
         * : Runs the search using a regular expression (without delimiters).
         * Warning: search-replace will take about 15-20x longer when using --regex.
         *
         * [--regex-flags=<regex-flags>]
         * : Pass PCRE modifiers to regex search-replace (e.g. 'i' for case-insensitivity).
         *
         * [--regex-delimiter=<regex-delimiter>]
         * : The delimiter to use for the regex. It must be escaped if it appears in the search string. The default value is the result of `chr(1)`.
         *
         * [--regex-limit=<regex-limit>]
         * : The maximum possible replacements for the regex per row (or per unserialized data bit per row). Defaults to -1 (no limit).
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - count
         * ---
         *
         * [--report]
         * : Produce report. Defaults to true.
         *
         * [--report-changed-only]
         * : Report changed fields only. Defaults to false, unless logging, when it defaults to true.
         *
         * [--log[=<file>]]
         * : Log the items changed. If <file> is not supplied or is "-", will output to STDOUT.
         * Warning: causes a significant slow down, similar or worse to enabling --precise or --regex.
         *
         * [--before_context=<num>]
         * : For logging, number of characters to display before the old match and the new replacement. Default 40. Ignored if not logging.
         *
         * [--after_context=<num>]
         * : For logging, number of characters to display after the old match and the new replacement. Default 40. Ignored if not logging.
         *
         * ## EXAMPLES
         *
         *     # Search and replace but skip one column
         *     $ wp search-replace 'http://example.test' 'http://example.com' --skip-columns=guid
         *
         *     # Run search/replace operation but dont save in database
         *     $ wp search-replace 'foo' 'bar' wp_posts wp_postmeta wp_terms --dry-run
         *
         *     # Run case-insensitive regex search/replace operation (slow)
         *     $ wp search-replace '\[foo id="([0-9]+)"' '[bar id="\1"' --regex --regex-flags='i'
         *
         *     # Turn your production multisite database into a local dev database
         *     $ wp search-replace --url=example.com example.com example.test 'wp_*options' wp_blogs
         *
         *     # Search/replace to a SQL file without transforming the database
         *     $ wp search-replace foo bar --export=database.sql
         *
         *     # Bash script: Search/replace production to development url (multisite compatible)
         *     #!/bin/bash
         *     if $(wp --url=http://example.com core is-installed --network); then
         *         wp search-replace --url=http://example.com 'http://example.com' 'http://example.test' --recurse-objects --network --skip-columns=guid --skip-tables=wp_users
         *     else
         *         wp search-replace 'http://example.com' 'http://example.test' --recurse-objects --skip-columns=guid --skip-tables=wp_users
         *     fi
         */
        public function __invoke($args, $assoc_args)
        {
        }
        private function php_export_table($table, $old, $new)
        {
        }
        private function sql_handle_col($col, $primary_keys, $table, $old, $new)
        {
        }
        private function php_handle_col($col, $primary_keys, $table, $old, $new)
        {
        }
        private function write_sql_row_fields($table, $rows)
        {
        }
        private static function get_columns($table)
        {
        }
        private static function is_text_col($type)
        {
        }
        private static function esc_like($old)
        {
        }
        /**
         * Escapes (backticks) MySQL identifiers (aka schema object names) - i.e. column names, table names, and database/index/alias/view etc names.
         * See https://dev.mysql.com/doc/refman/5.5/en/identifiers.html
         *
         * @param string|array $idents A single identifier or an array of identifiers.
         * @return string|array An escaped string if given a string, or an array of escaped strings if given an array of strings.
         */
        private static function esc_sql_ident($idents)
        {
        }
        /**
         * Puts MySQL string values in single quotes, to avoid them being interpreted as column names.
         *
         * @param string|array $values A single value or an array of values.
         * @return string|array A quoted string if given a string, or an array of quoted strings if given an array of strings.
         */
        private static function esc_sql_value($values)
        {
        }
        /**
         * Gets the color codes from the options if any, and returns the passed in array colorized with 2 elements per entry, a color code (or '') and a reset (or '').
         *
         * @param array $assoc_args The associative argument array passed to the command.
         * @param array $colors Array of default percent color code strings keyed by the color contexts.
         * @return array Array containing 2-element arrays keyed to the input $colors array.
         */
        private function get_colors($assoc_args, $colors)
        {
        }
        /*
         * Logs the difference between old match and new replacement for SQL replacement.
         *
         * @param string $col Column being processed.
         * @param array $primary_keys Primary keys for table.
         * @param string $table Table being processed.
         * @param string $old Old value to match.
         * @param string $new New value to replace the old value with.
         * @return int Count of changed rows.
         */
        private function log_sql_diff($col, $primary_keys, $table, $old, $new)
        {
        }
        /*
         * Logs the difference between old matches and new replacements at the end of a PHP (regex) replacement of a database row.
         *
         * @param string $col Column being processed.
         * @param array $keys Associative array (or object) of primary key names and their values for the row being processed.
         * @param string $table Table being processed.
         * @param string $old Old value to match.
         * @param string $new New value to replace the old value with.
         * @param array $log_data Array of data strings before replacements.
         */
        private function log_php_diff($col, $keys, $table, $old, $new, $log_data)
        {
        }
        /**
         * Returns the arrays of old matches and new replacements based on the passed-in matches, with context.
         *
         * @param string $search_regex The search regular expression.
         * @param string $old_data Existing data being processed.
         * @param array $old_matches Old matches array returned by `preg_match_all()`.
         * @param string $new New value to replace the old value with.
         * @return array Two element array containing the array of old match log strings and the array of new replacement log strings with before/after contexts.
         */
        private function log_bits($search_regex, $old_data, $old_matches, $new)
        {
        }
        /*
         * Outputs the log strings.
         *
         * @param string $col Column being processed.
         * @param array $keys Associative array (or object) of primary key names and their values for the row being processed.
         * @param string $table Table being processed.
         * @param array $old_bits Array of old match log strings.
         * @param array $new_bits Array of new replacement log strings.
         */
        private function log_write($col, $keys, $table, $old_bits, $new_bits)
        {
        }
    }
}
namespace WP_CLI {
    class SearchReplacer
    {
        private $from;
        private $to;
        private $recurse_objects;
        private $regex;
        private $regex_flags;
        private $regex_delimiter;
        private $regex_limit;
        private $logging;
        private $log_data;
        private $max_recursion;
        /**
         * @param string  $from            String we're looking to replace.
         * @param string  $to              What we want it to be replaced with.
         * @param bool    $recurse_objects Should objects be recursively replaced?
         * @param bool    $regex           Whether `$from` is a regular expression.
         * @param string  $regex_flags     Flags for regular expression.
         * @param string  $regex_delimiter Delimiter for regular expression.
         * @param bool    $logging         Whether logging.
         * @param integer $regex_limit     The maximum possible replacements for each pattern in each subject string.
         */
        public function __construct($from, $to, $recurse_objects = false, $regex = false, $regex_flags = '', $regex_delimiter = '/', $logging = false, $regex_limit = -1)
        {
        }
        /**
         * Take a serialised array and unserialise it replacing elements as needed and
         * unserialising any subordinate arrays and performing the replace on those too.
         * Ignores any serialized objects unless $recurse_objects is set to true.
         *
         * @param array|string $data            The data to operate on.
         * @param bool         $serialised      Does the value of $data need to be unserialized?
         *
         * @return array       The original array with all elements replaced as needed.
         */
        public function run($data, $serialised = false)
        {
        }
        /**
         * @param int          $recursion_level Current recursion depth within the original data.
         * @param array        $visited_data    Data that has been seen in previous recursion iterations.
         */
        private function run_recursively($data, $serialised, $recursion_level = 0, $visited_data = array())
        {
        }
        /**
         * Gets existing data saved for this run when logging.
         * @return array Array of data strings, prior to replacements.
         */
        public function get_log_data()
        {
        }
        /**
         * Clears data stored for logging.
         */
        public function clear_log_data()
        {
        }
        /**
         * Get the PCRE error constant name from an error value.
         *
         * @param  integer $error Error code.
         * @return string         Error constant name.
         */
        private function preg_error_message($error)
        {
        }
    }
}
namespace {
    class Server_Command extends \WP_CLI_Command
    {
        /**
         * Launches PHP's built-in web server for a specific WordPress installation.
         *
         * Uses `php -S` to launch a web server serving the WordPress webroot.
         * <http://php.net/manual/en/features.commandline.webserver.php>
         *
         * Importantly, PHP's built-in web server doesn't support `.htaccess` files.
         * If this is a requirement, please use a more advanced web server.
         *
         * ## OPTIONS
         *
         * [--host=<host>]
         * : The hostname to bind the server to.
         * ---
         * default: localhost
         * ---
         *
         * [--port=<port>]
         * : The port number to bind the server to.
         * ---
         * default: 8080
         * ---
         *
         * [--docroot=<path>]
         * : The path to use as the document root. If the path global parameter is
         * set, the default value is it.
         *
         * [--config=<file>]
         * : Configure the server with a specific .ini file.
         *
         * ## EXAMPLES
         *
         *     # Make the instance available on any address (with port 8080)
         *     $ wp server --host=0.0.0.0
         *     PHP 5.6.9 Development Server started at Tue May 24 01:27:11 2016
         *     Listening on http://0.0.0.0:8080
         *     Document root is /
         *     Press Ctrl-C to quit.
         *
         *     # Run on port 80 (for multisite)
         *     $ wp server --host=localhost.localdomain --port=80
         *     PHP 5.6.9 Development Server started at Tue May 24 01:30:06 2016
         *     Listening on http://localhost1.localdomain1:80
         *     Document root is /
         *     Press Ctrl-C to quit.
         *
         *     # Configure the server with a specific .ini file
         *     $ wp server --config=development.ini
         *     PHP 7.0.9 Development Server started at Mon Aug 22 12:09:04 2016
         *     Listening on http://localhost:8080
         *     Document root is /
         *     Press Ctrl-C to quit.
         *
         * @when before_wp_load
         */
        public function __invoke($_, $assoc_args)
        {
        }
    }
    class Shell_Command extends \WP_CLI_Command
    {
        /**
         * Opens an interactive PHP console for running and testing PHP code.
         *
         * `wp shell` allows you to evaluate PHP statements and expressions
         * interactively, from within a WordPress environment. Type a bit of code,
         * hit enter, and see the code execute right before you. Because WordPress
         * is loaded, you have access to all the functions, classes and globals
         * that you can use within a WordPress plugin, for example.
         *
         * ## OPTIONS
         *
         * [--basic]
         * : Force the use of WP-CLI's built-in PHP REPL, even if the Boris or
         * PsySH PHP REPLs are available.
         *
         * ## EXAMPLES
         *
         *     # Call get_bloginfo() to get the name of the site.
         *     $ wp shell
         *     wp> get_bloginfo( 'name' );
         *     => string(6) "WP-CLI"
         */
        public function __invoke($_, $assoc_args)
        {
        }
    }
}
namespace WP_CLI\Shell {
    class REPL
    {
        private $prompt;
        private $history_file;
        public function __construct($prompt)
        {
        }
        public function start()
        {
        }
        private static function non_expressions()
        {
        }
        private function prompt()
        {
        }
        private static function create_prompt_cmd($prompt, $history_path)
        {
        }
        private function set_history_file()
        {
        }
        private static function starts_with($tokens, $line)
        {
        }
    }
}
namespace {
    /**
     * Lists, adds, or removes super admin users on a multisite installation.
     *
     * ## EXAMPLES
     *
     *     # List user with super-admin capabilities
     *     $ wp super-admin list
     *     supervisor
     *     administrator
     *
     *     # Grant super-admin privileges to the user.
     *     $ wp super-admin add superadmin2
     *     Success: Granted super-admin capabilities.
     *
     *     # Revoke super-admin privileges to the user.
     *     $ wp super-admin remove superadmin2
     *     Success: Revoked super-admin capabilities.
     *
     * @package wp-cli
     */
    class Super_Admin_Command extends \WP_CLI_Command
    {
        private $fields = array('user_login');
        public function __construct()
        {
        }
        /**
         * Lists users with super admin capabilities.
         *
         * ## OPTIONS
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: list
         * options:
         *   - list
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # List user with super-admin capabilities
         *     $ wp super-admin list
         *     supervisor
         *     administrator
         *
         * @subcommand list
         */
        public function list_subcommand($_, $assoc_args)
        {
        }
        /**
         * Grants super admin privileges to one or more users.
         *
         * ## OPTIONS
         *
         * <user>...
         * : One or more user IDs, user emails, or user logins.
         *
         * ## EXAMPLES
         *
         *     $ wp super-admin add superadmin2
         *     Success: Granted super-admin capabilities.
         */
        public function add($args, $_)
        {
        }
        /**
         * Removes super admin privileges from one or more users.
         *
         * ## OPTIONS
         *
         * <user>...
         * : One or more user IDs, user emails, or user logins.
         *
         * ## EXAMPLES
         *
         *     $ wp super-admin remove superadmin2
         *     Success: Revoked super-admin capabilities.
         */
        public function remove($args, $_)
        {
        }
        private static function get_admins()
        {
        }
    }
    /**
     * Lists registered sidebars.
     *
     * A [sidebar](https://developer.wordpress.org/themes/functionality/sidebars/) is any widgetized area of your theme.
     *
     * ## EXAMPLES
     *
     *     # List sidebars
     *     $ wp sidebar list --fields=name,id --format=csv
     *     name,id
     *     "Widget Area",sidebar-1
     *     "Inactive Widgets",wp_inactive_widgets
     */
    class Sidebar_Command extends \WP_CLI_Command
    {
        private $fields = ['name', 'id', 'description'];
        /**
         * Lists registered sidebars.
         *
         * ## OPTIONS
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - ids
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each sidebar:
         *
         * * name
         * * id
         * * description
         *
         * These fields are optionally available:
         *
         * * class
         * * before_widget
         * * after_widget
         * * before_title
         * * after_title
         *
         * ## EXAMPLES
         *
         *     $ wp sidebar list --fields=name,id --format=csv
         *     name,id
         *     "Widget Area",sidebar-1
         *     "Inactive Widgets",wp_inactive_widgets
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
    }
    /**
     * Manages widgets, including adding and moving them within sidebars.
     *
     * A [widget](https://developer.wordpress.org/themes/functionality/widgets/) adds content and features to a widget area (also called a [sidebar](https://developer.wordpress.org/themes/functionality/sidebars/)).
     *
     * ## EXAMPLES
     *
     *     # List widgets on a given sidebar
     *     $ wp widget list sidebar-1
     *     +----------+------------+----------+----------------------+
     *     | name     | id         | position | options              |
     *     +----------+------------+----------+----------------------+
     *     | meta     | meta-6     | 1        | {"title":"Meta"}     |
     *     | calendar | calendar-2 | 2        | {"title":"Calendar"} |
     *     +----------+------------+----------+----------------------+
     *
     *     # Add a calendar widget to the second position on the sidebar
     *     $ wp widget add calendar sidebar-1 2
     *     Success: Added widget to sidebar.
     *
     *     # Update option(s) associated with a given widget
     *     $ wp widget update calendar-1 --title="Calendar"
     *     Success: Widget updated.
     *
     *     # Delete one or more widgets entirely
     *     $ wp widget delete calendar-2 archive-1
     *     Success: 2 widgets removed from sidebar.
     */
    class Widget_Command extends \WP_CLI_Command
    {
        private $fields = ['name', 'id', 'position', 'options'];
        /**
         * Lists widgets associated with a sidebar.
         *
         * ## OPTIONS
         *
         * <sidebar-id>
         * : ID for the corresponding sidebar.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each widget:
         *
         * * name
         * * id
         * * position
         * * options
         *
         * There are no optionally available fields.
         *
         * ## EXAMPLES
         *
         *     $ wp widget list sidebar-1 --fields=name,id --format=csv
         *     name,id
         *     meta,meta-5
         *     search,search-3
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Adds a widget to a sidebar.
         *
         * Creates a new widget entry in the database, and associates it with the
         * sidebar.
         *
         * ## OPTIONS
         *
         * <name>
         * : Widget name.
         *
         * <sidebar-id>
         * : ID for the corresponding sidebar.
         *
         * [<position>]
         * : Widget's current position within the sidebar. Defaults to last
         *
         * [--<field>=<value>]
         * : Widget option to add, with its new value
         *
         * ## EXAMPLES
         *
         *     # Add a new calendar widget to sidebar-1 with title "Calendar"
         *     $ wp widget add calendar sidebar-1 2 --title="Calendar"
         *     Success: Added widget to sidebar.
         *
         * @subcommand add
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Updates options for an existing widget.
         *
         * ## OPTIONS
         *
         * <widget-id>
         * : Unique ID for the widget
         *
         * [--<field>=<value>]
         * : Field to update, with its new value
         *
         * ## EXAMPLES
         *
         *     # Change calendar-1 widget title to "Our Calendar"
         *     $ wp widget update calendar-1 --title="Our Calendar"
         *     Success: Widget updated.
         *
         * @subcommand update
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Moves the position of a widget.
         *
         * Changes the order of a widget in its existing sidebar, or moves it to a
         * new sidebar.
         *
         * ## OPTIONS
         *
         * <widget-id>
         * : Unique ID for the widget
         *
         * [--position=<position>]
         * : Assign the widget to a new position.
         *
         * [--sidebar-id=<sidebar-id>]
         * : Assign the widget to a new sidebar
         *
         * ## EXAMPLES
         *
         *     # Change position of widget
         *     $ wp widget move recent-comments-2 --position=2
         *     Success: Widget moved.
         *
         *     # Move widget to Inactive Widgets
         *     $ wp widget move recent-comments-2 --sidebar-id=wp_inactive_widgets
         *     Success: Widget moved.
         *
         * @subcommand move
         */
        public function move($args, $assoc_args)
        {
        }
        /**
         * Deactivates one or more widgets from an active sidebar.
         *
         * Moves widgets to Inactive Widgets.
         *
         * ## OPTIONS
         *
         * <widget-id>...
         * : Unique ID for the widget(s)
         *
         * ## EXAMPLES
         *
         *     # Deactivate the recent-comments-2 widget.
         *     $ wp widget deactivate recent-comments-2
         *     Success: 1 widget deactivated.
         *
         * @subcommand deactivate
         */
        public function deactivate($args, $assoc_args)
        {
        }
        /**
         * Deletes one or more widgets from a sidebar.
         *
         * ## OPTIONS
         *
         * <widget-id>...
         * : Unique ID for the widget(s)
         *
         * ## EXAMPLES
         *
         *     # Delete the recent-comments-2 widget from its sidebar.
         *     $ wp widget delete recent-comments-2
         *     Success: Deleted 1 of 1 widgets.
         *
         * @subcommand delete
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Resets sidebar.
         *
         * Removes all widgets from the sidebar and places them in Inactive Widgets.
         *
         * ## OPTIONS
         *
         * [<sidebar-id>...]
         * : One or more sidebars to reset.
         *
         * [--all]
         * : If set, all sidebars will be reset.
         *
         * ## EXAMPLES
         *
         *     # Reset a sidebar
         *     $ wp widget reset sidebar-1
         *     Success: Sidebar 'sidebar-1' reset.
         *
         *     # Reset multiple sidebars
         *     $ wp widget reset sidebar-1 sidebar-2
         *     Success: Sidebar 'sidebar-1' reset.
         *     Success: Sidebar 'sidebar-2' reset.
         *
         *     # Reset all sidebars
         *     $ wp widget reset --all
         *     Success: Sidebar 'sidebar-1' reset.
         *     Success: Sidebar 'sidebar-2' reset.
         *     Success: Sidebar 'sidebar-3' reset.
         */
        public function reset($args, $assoc_args)
        {
        }
        /**
         * Checks whether a sidebar is a valid sidebar
         *
         * @param string $sidebar_id
         */
        private function validate_sidebar($sidebar_id)
        {
        }
        /**
         * Checks whether the specified widget is on the sidebar
         *
         * @param string $widget_id
         */
        private function validate_sidebar_widget($widget_id)
        {
        }
        /**
         * Gets the widgets (and their associated data) for a given sidebar
         *
         * @param string $sidebar_id
         * @return array
         */
        private function get_sidebar_widgets($sidebar_id)
        {
        }
        /**
         * Re-implementation of wp_get_sidebars_widgets()
         * because the original has a nasty global component
         */
        private function wp_get_sidebars_widgets()
        {
        }
        /**
         * Gets the widget's name, option index, sidebar, and sidebar index from its ID
         *
         * @param string $widget_id
         * @return array
         */
        private function get_widget_data($widget_id)
        {
        }
        /**
         * Gets the options for a given widget
         *
         * @param string $name
         * @return array
         */
        private function get_widget_options($name)
        {
        }
        /**
         * Updates the options for a given widget
         *
         * @param string $name
         * @param mixed
         */
        private function update_widget_options($name, $value)
        {
        }
        /**
         * Repositions a widget within a sidebar or move to another sidebar.
         *
         * @param string $widget_id
         * @param string|null $current_sidebar_id
         * @param string $new_sidebar_id
         * @param int|null $current_index
         * @param int $new_index
         */
        private function move_sidebar_widget($widget_id, $current_sidebar_id, $new_sidebar_id, $current_index, $new_index)
        {
        }
        /**
         * Gets a widget's instantiated object based on its name
         *
         * @param string $id_base Name of the widget
         * @return WP_Widget|false
         */
        private function get_widget_obj($id_base)
        {
        }
        /**
         * Cleans up a widget's options based on its update callback
         *
         * @param string $id_base Name of the widget
         * @param mixed $dirty_options
         * @param mixed $old_options
         * @return mixed
         */
        private function sanitize_widget_options($id_base, $dirty_options, $old_options)
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Class Autoloader.
     *
     * This is a custom autoloader to replace the functionality that we would
     * normally get through the autoloader generated by Composer.
     *
     * We need this separate autoloader for the bootstrapping process, which happens
     * before the Composer autoloader(s) could be loaded.
     *
     * @package WP_CLI
     */
    class Autoloader
    {
        /**
         * Array containing the registered namespace structures
         *
         * @var array
         */
        protected $namespaces = array();
        /**
         * Destructor for the Autoloader class.
         *
         * The destructor automatically unregisters the autoload callback function
         * with the SPL autoload system.
         */
        public function __destruct()
        {
        }
        /**
         * Registers the autoload callback with the SPL autoload system.
         */
        public function register()
        {
        }
        /**
         * Unregisters the autoload callback with the SPL autoload system.
         */
        public function unregister()
        {
        }
        /**
         * Add a specific namespace structure with our custom autoloader.
         *
         * @param string  $root        Root namespace name.
         * @param string  $base_dir    Directory containing the class files.
         * @param string  $prefix      Prefix to be added before the class.
         * @param string  $suffix      Suffix to be added after the class.
         * @param boolean $lowercase   Whether the class should be changed to
         *                             lowercase.
         * @param boolean $underscores Whether the underscores should be changed to
         *                             hyphens.
         *
         * @return self
         */
        public function add_namespace($root, $base_dir, $prefix = '', $suffix = '.php', $lowercase = false, $underscores = false)
        {
        }
        /**
         * The autoload function that gets registered with the SPL Autoloader
         * system.
         *
         * @param string $class The class that got requested by the spl_autoloader.
         */
        public function autoload($class)
        {
        }
        /**
         * Normalize a namespace root.
         *
         * @param string $root Namespace root that needs to be normalized.
         *
         * @return string Normalized namespace root.
         */
        protected function normalize_root($root)
        {
        }
        /**
         * Remove a leading backslash from a string.
         *
         * @param string $string String to remove the leading backslash from.
         *
         * @return string Modified string.
         */
        protected function remove_leading_backslash($string)
        {
        }
        /**
         * Make sure a string ends with a trailing backslash.
         *
         * @param string $string String to check the trailing backslash of.
         *
         * @return string Modified string.
         */
        protected function add_trailing_backslash($string)
        {
        }
        /**
         * Make sure a string ends with a trailing slash.
         *
         * @param string $string String to check the trailing slash of.
         *
         * @return string Modified string.
         */
        protected function add_trailing_slash($string)
        {
        }
    }
}
namespace WP_CLI\Bootstrap {
    /**
     * Interface BootstrapStep.
     *
     * Represents a single bootstrapping step that can be processed.
     *
     * @package WP_CLI\Bootstrap
     */
    interface BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state);
    }
    /**
     * Abstract class AutoloaderStep.
     *
     * Abstract base class for steps that include an autoloader.
     *
     * @package WP_CLI\Bootstrap
     */
    abstract class AutoloaderStep implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Store state for subclasses to have access.
         *
         * @var BootstrapState
         */
        protected $state;
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
        /**
         * Get the name of the custom vendor folder as set in `composer.json`.
         *
         * @return string|false Name of the custom vendor folder or false if none.
         */
        protected function get_custom_vendor_folder()
        {
        }
        /**
         * Handle the failure to find an autoloader.
         *
         * @return void
         */
        protected function handle_failure()
        {
        }
        /**
         * Get the autoloader paths to scan for an autoloader.
         *
         * @return string[]|false Array of strings with autoloader paths, or false
         *                        to skip.
         */
        protected abstract function get_autoloader_paths();
    }
    /**
     * Class BootstrapState.
     *
     * Represents the state that is passed from one bootstrap step to the next.
     *
     * @package WP_CLI\Bootstrap
     *
     * Maintain BC: Changing the method names in this class breaks autoload interactions between Phar
     * & framework/commands you use outside of Phar (like when running the Phar WP inside of a command folder).
     * @phpcs:disable WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
     */
    class BootstrapState
    {
        /**
         * Whether the command currently being run is "protected".
         *
         * This means that the command should not be allowed to break due to
         * extension code.
         */
        const IS_PROTECTED_COMMAND = 'is_protected_command';
        /**
         * Internal storage of the state values.
         *
         * @var array
         */
        private $state = array();
        /**
         * Get the state value for a given key.
         *
         * @param string $key      Key to get the state from.
         * @param mixed  $fallback Fallback value to use if the key is not defined.
         *
         * @return mixed
         */
        public function getValue($key, $fallback = null)
        {
        }
        /**
         * Set the state value for a given key.
         *
         * @param string $key   Key to set the state for.
         * @param mixed  $value Value to set the state for the given key to.
         *
         * @return void
         */
        public function setValue($key, $value)
        {
        }
    }
    /**
     * Class ConfigureRunner.
     *
     * Initialize the configuration for the `WP_CLI\Runner` object.
     *
     * @package WP_CLI\Bootstrap
     */
    final class ConfigureRunner implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class DeclareAbstractBaseCommand.
     *
     * Declares the abstract `WP_CLI_Command` base class.
     *
     * @package WP_CLI\Bootstrap
     */
    final class DeclareAbstractBaseCommand implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class DeclareMainClass.
     *
     * Declares the main `WP_CLI` class.
     *
     * @package WP_CLI\Bootstrap
     */
    final class DeclareMainClass implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class DefineProtectedCommands.
     *
     * Define the commands that are "protected", meaning that they shouldn't be able
     * to break due to extension code.
     *
     * @package WP_CLI\Bootstrap
     */
    final class DefineProtectedCommands implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
        /**
         * Get the list of protected commands.
         *
         * @return array
         */
        private function get_protected_commands()
        {
        }
        /**
         * Get the current command as a string.
         *
         * @return string Current command to be executed.
         */
        private function get_current_command()
        {
        }
    }
    /**
     * Class IncludeFallbackAutoloader.
     *
     * Loads the fallback autoloader that is provided through the `composer.json`
     * file.
     *
     * @package WP_CLI\Bootstrap
     */
    final class IncludeFallbackAutoloader extends \WP_CLI\Bootstrap\AutoloaderStep
    {
        /**
         * Get the autoloader paths to scan for an autoloader.
         *
         * @return string[]|false Array of strings with autoloader paths, or false
         *                        to skip.
         */
        protected function get_autoloader_paths()
        {
        }
    }
    /**
     * Class IncludeFrameworkAutoloader.
     *
     * Loads the framework autoloader through an autolaoder separate from the
     * Composer one, to avoid coupling the loading of the framework with bundled
     * commands.
     *
     * This only contains classes for the framework.
     *
     * @package WP_CLI\Bootstrap
     */
    final class IncludeFrameworkAutoloader implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class IncludePackageAutoloader.
     *
     * Loads the package autoloader that includes all the external packages.
     *
     * @package WP_CLI\Bootstrap
     */
    final class IncludePackageAutoloader extends \WP_CLI\Bootstrap\AutoloaderStep
    {
        /**
         * Get the autoloader paths to scan for an autoloader.
         *
         * @return string[]|false Array of strings with autoloader paths, or false
         *                        to skip.
         */
        protected function get_autoloader_paths()
        {
        }
        /**
         * Handle the failure to find an autoloader.
         *
         * @return void
         */
        protected function handle_failure()
        {
        }
    }
    /**
     * Class InitializeColorization.
     *
     * Initialize the colorization through the `WP_CLI\Runner` object.
     *
     * @package WP_CLI\Bootstrap
     */
    final class InitializeColorization implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class InitializeLogger.
     *
     * Initialize the logger through the `WP_CLI\Runner` object.
     *
     * @package WP_CLI\Bootstrap
     */
    final class InitializeLogger implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
        /**
         * Load the class declarations for the loggers.
         */
        private function declare_loggers()
        {
        }
    }
    /**
     * Class LaunchRunner.
     *
     * Kick off the Runner object that starts the actual commands.
     *
     * @package WP_CLI\Bootstrap
     */
    final class LaunchRunner implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class LoadDispatcher.
     *
     * Loads the dispatcher that will dispatch command names to file locations.
     *
     * @package WP_CLI\Bootstrap
     */
    final class LoadDispatcher implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class LoadRequiredCommand.
     *
     * Loads a command that was passed through the `--require=<command>` option.
     *
     * @package WP_CLI\Bootstrap
     */
    final class LoadRequiredCommand implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class LoadUtilityFunctions.
     *
     * Loads the functions available through `WP_CLI\Utils`.
     *
     * @package WP_CLI\Bootstrap
     */
    final class LoadUtilityFunctions implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class RegisterDeferredCommands.
     *
     * Registers the deferred commands that for which no parent was registered yet.
     * This is necessary, because we can have sub-commands that have no direct
     * parent, like `wp network meta`.
     *
     * @package WP_CLI\Bootstrap
     */
    final class RegisterDeferredCommands implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
        /**
         * Add deferred commands that are still waiting to be processed.
         */
        public function add_deferred_commands()
        {
        }
    }
    /**
     * Class RegisterFrameworkCommands.
     *
     * Register the commands that are directly included with the framework.
     *
     * @package WP_CLI\Bootstrap
     */
    final class RegisterFrameworkCommands implements \WP_CLI\Bootstrap\BootstrapStep
    {
        /**
         * Process this single bootstrapping step.
         *
         * @param BootstrapState $state Contextual state to pass into the step.
         *
         * @return BootstrapState Modified state to pass to the next step.
         */
        public function process(\WP_CLI\Bootstrap\BootstrapState $state)
        {
        }
    }
    /**
     * Class RunnerInstance.
     *
     * Convenience class for steps that make use of the `WP_CLI\Runner` object.
     *
     * @package WP_CLI\Bootstrap
     */
    final class RunnerInstance
    {
        /**
         * Return an instance of the `WP_CLI\Runner` object.
         *
         * Includes necessary class files first as needed.
         *
         * @return \WP_CLI\Runner
         */
        public function __invoke()
        {
        }
    }
}
namespace WP_CLI\Compat\Min_PHP_5_6 {
    trait FeedbackMethodTrait
    {
        /**
         * @param string $string
         * @param mixed  ...$args Optional text replacements.
         *
         */
        public function feedback($string, ...$args)
        {
        }
    }
}
namespace WP_CLI\Compat {
    trait FeedbackMethodTrait
    {
        use \WP_CLI\Compat\Min_PHP_5_6\FeedbackMethodTrait;
    }
}
namespace WP_CLI\Compat\Min_PHP_5_4 {
    trait FeedbackMethodTrait
    {
        /**
         * @param string $string
         */
        public function feedback($string)
        {
        }
    }
}
namespace WP_CLI {
    class Completions
    {
        private $words;
        private $opts = array();
        public function __construct($line)
        {
        }
        private function get_command($words)
        {
        }
        private function get_global_parameters()
        {
        }
        private function add($opt)
        {
        }
        public function render()
        {
        }
    }
    /**
     * A Composer IO class so we can provide some level of interactivity from WP-CLI
     */
    class ComposerIO extends \Composer\IO\NullIO
    {
        /**
         * {@inheritDoc}
         */
        public function isVerbose()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function write($messages, $newline = true, $verbosity = self::NORMAL)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function writeError($messages, $newline = true, $verbosity = self::NORMAL)
        {
        }
        private static function output_clean_message($messages)
        {
        }
    }
    /**
     * Handles file- and runtime-based configuration values.
     *
     * @package WP_CLI
     */
    class Configurator
    {
        /**
         * @var array $spec Configurator argument specification.
         */
        private $spec;
        /**
         * @var array $config Values for keys defined in Configurator spec.
         */
        private $config = array();
        /**
         * @var array $extra_config Extra config values not specified in spec.
         */
        private $extra_config = array();
        /**
         * @var array $aliases Any aliases defined in config files.
         */
        private $aliases = array();
        /**
         * @var string ALIAS_REGEX Regex pattern used to define an alias
         */
        const ALIAS_REGEX = '^@[A-Za-z0-9-_\\.\\-]+$';
        /**
         * @var array ALIAS_SPEC Arguments that can be used in an alias
         */
        private static $alias_spec = array('user', 'url', 'path', 'ssh', 'http');
        /**
         * @param string $path Path to config spec file.
         */
        public function __construct($path)
        {
        }
        /**
         * Get declared configuration values as an array.
         *
         * @return array
         */
        public function to_array()
        {
        }
        /**
         * Get configuration specification, i.e. list of accepted keys.
         *
         * @return array
         */
        public function get_spec()
        {
        }
        /**
         * Get any aliases defined in config files.
         *
         * @return array
         */
        public function get_aliases()
        {
        }
        /**
         * Splits a list of arguments into positional, associative and config.
         *
         * @param array(string)
         * @return array(array)
         */
        public function parse_args($arguments)
        {
        }
        /**
         * Splits positional args from associative args.
         *
         * @param array
         * @return array(array)
         */
        public static function extract_assoc($arguments)
        {
        }
        /**
         * Separate runtime parameters from command-specific parameters.
         *
         * @param array $mixed_args
         * @return array
         */
        private function unmix_assoc_args($mixed_args, $global_assoc = array(), $local_assoc = array())
        {
        }
        /**
         * Handle turning an $assoc_arg into a runtime arg.
         */
        private function assoc_arg_to_runtime_config($key, $value, &$runtime_config)
        {
        }
        /**
         * Load a YAML file of parameters into scope.
         *
         * @param string $path Path to YAML file.
         */
        public function merge_yml($path, $current_alias = null)
        {
        }
        /**
         * Merge an array of values into the configurator config.
         *
         * @param array $config
         */
        public function merge_array($config)
        {
        }
        /**
         * Load values from a YAML file.
         *
         * @param string $yml_file Path to the YAML file
         * @return array $config Declared configuration values
         */
        private static function load_yml($yml_file)
        {
        }
        /**
         * Conform a variable to an array.
         *
         * @param mixed $val A string or an array
         */
        private static function arrayify(&$val)
        {
        }
        /**
         * Make a path absolute.
         *
         * @param string $path Path to file.
         * @param string $base Base path to prepend.
         */
        private static function absolutize(&$path, $base)
        {
        }
    }
}
namespace WP_CLI\Dispatcher {
    /**
     * Controls whether adding of a command should be completed or not.
     *
     * This is needed because we can't reliably pass scalar values by reference
     * through the hooks mechanism. An object is always passed by reference.
     *
     * @package WP_CLI
     */
    final class CommandAddition
    {
        /**
         * Whether the command addition was aborted or not.
         *
         * @var bool
         */
        private $abort = false;
        /**
         * Reason for which the addition was aborted.
         *
         * @var string
         */
        private $reason = '';
        /**
         * Abort the current command addition.
         *
         * @param string $reason Reason as to why the addition was aborted.
         */
        public function abort($reason = '')
        {
        }
        /**
         * Check whether the command addition was aborted.
         *
         * @return bool
         */
        public function was_aborted()
        {
        }
        /**
         * Get the reason as to why the addition was aborted.
         *
         * @return string
         */
        public function get_reason()
        {
        }
    }
    /**
     * Creates CompositeCommand or Subcommand instances.
     *
     * @package WP_CLI
     */
    class CommandFactory
    {
        // Cache of file contents, indexed by filename. Only used if opcache.save_comments is disabled.
        private static $file_contents = array();
        /**
         * Create a new CompositeCommand (or Subcommand if class has __invoke())
         *
         * @param string $name Represents how the command should be invoked
         * @param string $callable A subclass of WP_CLI_Command, a function, or a closure
         * @param mixed $parent The new command's parent Composite (or Root) command
         */
        public static function create($name, $callable, $parent)
        {
        }
        /**
         * Clear the file contents cache.
         */
        public static function clear_file_contents_cache()
        {
        }
        /**
         * Create a new Subcommand instance.
         *
         * @param mixed $parent The new command's parent Composite command
         * @param string|bool $name Represents how the command should be invoked.
         * If false, will be determined from the documented subject, represented by `$reflection`.
         * @param mixed $callable A callable function or closure, or class name and method
         * @param object $reflection Reflection instance, for doc parsing
         * @param string $class A subclass of WP_CLI_Command
         * @param string $method Class method to be called upon invocation.
         */
        private static function create_subcommand($parent, $name, $callable, $reflection)
        {
        }
        /**
         * Create a new Composite command instance.
         *
         * @param mixed $parent The new command's parent Root or Composite command
         * @param string $name Represents how the command should be invoked
         * @param mixed $callable
         */
        private static function create_composite_command($parent, $name, $callable)
        {
        }
        /**
         * Create a new command namespace instance.
         *
         * @param mixed $parent The new namespace's parent Root or Composite command.
         * @param string $name Represents how the command should be invoked
         * @param mixed $callable
         */
        private static function create_namespace($parent, $name, $callable)
        {
        }
        /**
         * Check whether a method is actually callable.
         *
         * @param ReflectionMethod $method
         * @return bool
         */
        private static function is_good_method($method)
        {
        }
        /**
         * Gets the document comment. Caters for PHP directive `opcache.save comments` being disabled.
         *
         * @param ReflectionMethod|ReflectionClass|ReflectionFunction $reflection Reflection instance.
         * @return string|false|null Doc comment string if any, false if none (same as `Reflection*::getDocComment()`), null if error.
         */
        private static function get_doc_comment($reflection)
        {
        }
        /**
         * Returns the last doc comment if any in `$content`.
         *
         * @param string $content The content, which should end at the class or function declaration.
         * @return string|bool The last doc comment if any, or false if none.
         */
        private static function extract_last_doc_comment($content)
        {
        }
    }
    /**
     * The root node in the command tree.
     *
     * @package WP_CLI
     */
    class RootCommand extends \WP_CLI\Dispatcher\CompositeCommand
    {
        public function __construct()
        {
        }
        /**
         * Get the human-readable long description.
         *
         * @return string
         */
        public function get_longdesc()
        {
        }
        /**
         * Find a subcommand registered on the root
         * command.
         *
         * @param array $args
         * @return \WP_CLI\Dispatcher\Subcommand|false
         */
        public function find_subcommand(&$args)
        {
        }
    }
    /**
     * A leaf node in the command tree.
     *
     * @package WP_CLI
     */
    class Subcommand extends \WP_CLI\Dispatcher\CompositeCommand
    {
        private $alias;
        private $when_invoked;
        public function __construct($parent, $name, $docparser, $when_invoked)
        {
        }
        /**
         * Extract the synopsis from PHPdoc string.
         *
         * @param string $longdesc Command docs via PHPdoc
         * @return string
         */
        private static function extract_synopsis($longdesc)
        {
        }
        /**
         * Subcommands can't have subcommands because they
         * represent code to be executed.
         *
         * @return bool
         */
        public function can_have_subcommands()
        {
        }
        /**
         * Get the synopsis string for this subcommand.
         * A synopsis defines what runtime arguments are
         * expected, useful to humans and argument validation.
         *
         * @return string
         */
        public function get_synopsis()
        {
        }
        /**
         * Set the synopsis string for this subcommand.
         *
         * @param string
         */
        public function set_synopsis($synopsis)
        {
        }
        /**
         * If an alias is set, grant access to it.
         * Aliases permit subcommands to be instantiated
         * with a secondary identity.
         *
         * @return string
         */
        public function get_alias()
        {
        }
        /**
         * Print the usage details to the end user.
         *
         * @param string $prefix
         */
        public function show_usage($prefix = 'usage: ')
        {
        }
        /**
         * Get the usage of the subcommand as a formatted string.
         *
         * @param string $prefix
         * @return string
         */
        public function get_usage($prefix)
        {
        }
        /**
         * Wrapper for CLI Tools' prompt() method.
         *
         * @param string $question
         * @param string $default
         * @return string|false
         */
        private function prompt($question, $default)
        {
        }
        /**
         * Interactively prompt the user for input
         * based on defined synopsis and passed arguments.
         *
         * @param array $args
         * @param array $assoc_args
         * @return array
         */
        private function prompt_args($args, $assoc_args)
        {
        }
        /**
         * Validate the supplied arguments to the command.
         * Throws warnings or errors if arguments are missing
         * or invalid.
         *
         * @param array $args
         * @param array $assoc_args
         * @param array $extra_args
         * @return array list of invalid $assoc_args keys to unset
         */
        private function validate_args($args, $assoc_args, $extra_args)
        {
        }
        /**
         * Invoke the subcommand with the supplied arguments.
         * Given a --prompt argument, interactively request input
         * from the end user.
         *
         * @param array $args
         * @param array $assoc_args
         */
        public function invoke($args, $assoc_args, $extra_args)
        {
        }
        /**
         * Get an array of parameter names, by merging the command-specific and the
         * global parameters.
         *
         * @param array  $spec Optional. Specification of the current command.
         *
         * @return array Array of parameter names
         */
        private function get_parameters($spec = array())
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Parse command attributes from its PHPdoc.
     * Used to determine execution characteristics (arguments, etc.).
     */
    class DocParser
    {
        /**
         * @var string $docComment PHPdoc command for the command.
         */
        protected $doc_comment;
        /**
         * @param string $doc_comment
         */
        public function __construct($doc_comment)
        {
        }
        /**
         * Remove unused cruft from PHPdoc comment.
         *
         * @param string $comment PHPdoc comment.
         * @return string
         */
        private static function remove_decorations($comment)
        {
        }
        /**
         * Get the command's short description (e.g. summary).
         *
         * @return string
         */
        public function get_shortdesc()
        {
        }
        /**
         * Get the command's full description
         *
         * @return string
         */
        public function get_longdesc()
        {
        }
        /**
         * Get the value for a given tag (e.g. "@alias" or "@subcommand")
         *
         * @param string $name Name for the tag, without '@'
         * @return string
         */
        public function get_tag($name)
        {
        }
        /**
         * Get the command's synopsis.
         *
         * @return string
         */
        public function get_synopsis()
        {
        }
        /**
         * Get the description for a given argument.
         *
         * @param string $name Argument's doc name.
         * @return string
         */
        public function get_arg_desc($name)
        {
        }
        /**
         * Get the arguments for a given argument.
         *
         * @param string $name Argument's doc name.
         * @return mixed|null
         */
        public function get_arg_args($name)
        {
        }
        /**
         * Get the description for a given parameter.
         *
         * @param string $key Parameter's key.
         * @return string
         */
        public function get_param_desc($key)
        {
        }
        /**
         * Get the arguments for a given parameter.
         *
         * @param string $key Parameter's key.
         * @return mixed|null
         */
        public function get_param_args($key)
        {
        }
        /**
         * Get the args for an arg or param
         *
         * @param string $regex Pattern to match against
         * @return array|null Interpreted YAML document, or null.
         */
        private function get_arg_or_param_args($regex)
        {
        }
    }
    class ExitException extends \Exception
    {
    }
    /**
     * Extract a provided archive file.
     */
    class Extractor
    {
        /**
         * Extract the archive file to a specific destination.
         *
         * @param string $dest
         */
        public static function extract($tarball_or_zip, $dest)
        {
        }
        /**
         * Extract a ZIP file to a specific destination.
         *
         * @param string $zipfile
         * @param string $dest
         */
        private static function extract_zip($zipfile, $dest)
        {
        }
        /**
         * Extract a tarball to a specific destination.
         *
         * @param string $tarball
         * @param string $dest
         */
        private static function extract_tarball($tarball, $dest)
        {
        }
        /**
         * Copy files from source directory to destination directory. Source
         * directory must exist.
         *
         * @param string $source
         * @param string $dest
         */
        public static function copy_overwrite_files($source, $dest)
        {
        }
        /**
         * Delete all files and directories recursively from directory. Directory
         * must exist.
         *
         * @param string $dir
         */
        public static function rmdir($dir)
        {
        }
        /**
         * Return formatted ZipArchive error message from error code.
         *
         * @param int $error_code
         * @return string|int The error message corresponding to the specified
         *                    code, if found; Other wise the same error code,
         *                    unmodified.
         */
        public static function zip_error_msg($error_code)
        {
        }
        /**
         * Return formatted error message from ProcessRun of tar command.
         *
         * @param Processrun $process_run
         * @return string|int The error message of the process, if available;
         *                    otherwise the return code.
         */
        public static function tar_error_msg($process_run)
        {
        }
        /**
         * Return the first subfolder within a given path.
         *
         * Falls back to the provided path if no subfolder was detected.
         *
         * @param string $path Path to find the first subfolder in.
         * @return string First subfolder, or same as $path if none found.
         */
        private static function get_first_subfolder($path)
        {
        }
        /**
         * Ensure directory exists.
         *
         * @param string $dir Directory to ensure the existence of.
         * @return bool Whether the existence could be asserted.
         */
        private static function ensure_dir_exists($dir)
        {
        }
        /**
         * Check whether a path is relative-
         *
         * @param string $path Path to check.
         * @return bool Whether the path is relative.
         */
        private static function path_is_relative($path)
        {
        }
    }
    /**
     * Reads/writes to a filesystem cache
     */
    class FileCache
    {
        /**
         * @var string cache path
         */
        protected $root;
        /**
         * @var bool
         */
        protected $enabled = true;
        /**
         * @var int files time to live
         */
        protected $ttl;
        /**
         * @var int max total size
         */
        protected $max_size;
        /**
         * @var string key allowed chars (regex class)
         */
        protected $whitelist;
        /**
         * @param string $cache_dir  location of the cache
         * @param int    $ttl        cache files default time to live (expiration)
         * @param int    $max_size   max total cache size
         * @param string $whitelist  List of characters that are allowed in path names (used in a regex character class)
         */
        public function __construct($cache_dir, $ttl, $max_size, $whitelist = 'a-z0-9._-')
        {
        }
        /**
         * Cache is enabled
         *
         * @return bool
         */
        public function is_enabled()
        {
        }
        /**
         * Cache root
         *
         * @return string
         */
        public function get_root()
        {
        }
        /**
         * Check if a file is in cache and return its filename
         *
         * @param string $key cache key
         * @param int    $ttl time to live
         * @return bool|string filename or false
         */
        public function has($key, $ttl = null)
        {
        }
        /**
         * Write to cache file
         *
         * @param string $key      cache key
         * @param string $contents file contents
         * @return bool
         */
        public function write($key, $contents)
        {
        }
        /**
         * Read from cache file
         *
         * @param string $key cache key
         * @param int    $ttl time to live
         * @return bool|string file contents or false
         */
        public function read($key, $ttl = null)
        {
        }
        /**
         * Copy a file into the cache
         *
         * @param string $key    cache key
         * @param string $source source filename
         * @return bool
         */
        public function import($key, $source)
        {
        }
        /**
         * Copy a file out of the cache
         *
         * @param string $key    cache key
         * @param string $target target filename
         * @param int    $ttl    time to live
         * @return bool
         */
        public function export($key, $target, $ttl = null)
        {
        }
        /**
         * Remove file from cache
         *
         * @param string $key cache key
         * @return bool
         */
        public function remove($key)
        {
        }
        /**
         * Clean cache based on time to live and max size
         *
         * @return bool
         */
        public function clean()
        {
        }
        /**
         * Remove all cached files.
         *
         * @return bool
         */
        public function clear()
        {
        }
        /**
         * Remove all cached files except for the newest version of one.
         *
         * @return bool
         */
        public function prune()
        {
        }
        /**
         * Ensure directory exists
         *
         * @param string $dir directory
         * @return bool
         */
        protected function ensure_dir_exists($dir)
        {
        }
        /**
         * Prepare cache write
         *
         * @param string $key cache key
         * @return bool|string filename or false
         */
        protected function prepare_write($key)
        {
        }
        /**
         * Validate cache key
         *
         * @param string $key cache key
         * @return string relative filename
         */
        protected function validate_key($key)
        {
        }
        /**
         * Filename from key
         *
         * @param string $key
         * @return string filename
         */
        protected function filename($key)
        {
        }
        /**
         * Get a Finder that iterates in cache root only the files
         *
         * @return Finder
         */
        protected function get_finder()
        {
        }
    }
    /**
     * Output one or more items in a given format (e.g. table, JSON).
     */
    class Formatter
    {
        /**
         * @var array $args How the items should be output.
         */
        private $args;
        /**
         * @var string $prefix Standard prefix for object fields.
         */
        private $prefix;
        /**
         * @param array $assoc_args Output format arguments.
         * @param array $fields Fields to display of each item.
         * @param string|bool $prefix Check if fields have a standard prefix.
         * False indicates empty prefix.
         */
        public function __construct(&$assoc_args, $fields = null, $prefix = false)
        {
        }
        /**
         * Magic getter for arguments.
         *
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Display multiple items according to the output arguments.
         *
         * @param array|\Iterator $items               The items to display.
         * @param bool|array      $ascii_pre_colorized Optional. A boolean or an array of booleans to pass to `format()` if items in the table are pre-colorized. Default false.
         */
        public function display_items($items, $ascii_pre_colorized = false)
        {
        }
        /**
         * Display a single item according to the output arguments.
         *
         * @param mixed      $item
         * @param bool|array $ascii_pre_colorized Optional. A boolean or an array of booleans to pass to `show_multiple_fields()` if the item in the table is pre-colorized. Default false.
         */
        public function display_item($item, $ascii_pre_colorized = false)
        {
        }
        /**
         * Format items according to arguments.
         *
         * @param array      $items
         * @param bool|array $ascii_pre_colorized Optional. A boolean or an array of booleans to pass to `show_table()` if items in the table are pre-colorized. Default false.
         */
        private function format($items, $ascii_pre_colorized = false)
        {
        }
        /**
         * Show a single field from a list of items.
         *
         * @param array Array of objects to show fields from
         * @param string The field to show
         */
        private function show_single_field($items, $field)
        {
        }
        /**
         * Find an object's key.
         * If $prefix is set, a key with that prefix will be prioritized.
         *
         * @param object $item
         * @param string $field
         * @return string $key
         */
        private function find_item_key($item, $field)
        {
        }
        /**
         * Show multiple fields of an object.
         *
         * @param object|array $data                Data to display
         * @param string       $format              Format to display the data in
         * @param bool|array   $ascii_pre_colorized Optional. A boolean or an array of booleans to pass to `show_table()` if the item in the table is pre-colorized. Default false.
         */
        private function show_multiple_fields($data, $format, $ascii_pre_colorized = false)
        {
        }
        /**
         * Show items in a \cli\Table.
         *
         * @param array      $items
         * @param array      $fields
         * @param bool|array $ascii_pre_colorized Optional. A boolean or an array of booleans to pass to `Table::setAsciiPreColorized()` if items in the table are pre-colorized. Default false.
         */
        private static function show_table($items, $fields, $ascii_pre_colorized = false)
        {
        }
        /**
         * Format an associative array as a table.
         *
         * @param array     $fields    Fields and values to format
         * @return array    $rows
         */
        private function assoc_array_to_rows($fields)
        {
        }
        /**
         * Transforms objects and arrays to JSON as necessary
         *
         * @param mixed $item
         * @return mixed
         */
        public function transform_item_values_to_json($item)
        {
        }
    }
    /**
     * Doctrine inflector has static methods for inflecting text.
     *
     * The methods in these classes are from several different sources collected
     * across several different php projects and several different authors. The
     * original author names and emails are not known.
     *
     * Pluralize & Singularize implementation are borrowed from CakePHP with some modifications.
     *
     * @link   www.doctrine-project.org
     * @since  1.0
     * @author Konsta Vesterinen <kvesteri@cc.hut.fi>
     * @author Jonathan H. Wage <jonwage@gmail.com>
     */
    class Inflector
    {
        /**
         * Plural inflector rules.
         *
         * @var array
         */
        private static $plural = array('rules' => array('/(s)tatus$/i' => '\\1\\2tatuses', '/(quiz)$/i' => '\\1zes', '/^(ox)$/i' => '\\1\\2en', '/([m|l])ouse$/i' => '\\1ice', '/(matr|vert|ind)(ix|ex)$/i' => '\\1ices', '/(x|ch|ss|sh)$/i' => '\\1es', '/([^aeiouy]|qu)y$/i' => '\\1ies', '/(hive)$/i' => '\\1s', '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves', '/sis$/i' => 'ses', '/([ti])um$/i' => '\\1a', '/(p)erson$/i' => '\\1eople', '/(m)an$/i' => '\\1en', '/(c)hild$/i' => '\\1hildren', '/(f)oot$/i' => '\\1eet', '/(buffal|her|potat|tomat|volcan)o$/i' => '\\1\\2oes', '/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|vir)us$/i' => '\\1i', '/us$/i' => 'uses', '/(alias)$/i' => '\\1es', '/(analys|ax|cris|test|thes)is$/i' => '\\1es', '/s$/' => 's', '/^$/' => '', '/$/' => 's'), 'uninflected' => array('.*[nrlm]ese', '.*deer', '.*fish', '.*measles', '.*ois', '.*pox', '.*sheep', 'people', 'cookie'), 'irregular' => array('atlas' => 'atlases', 'axe' => 'axes', 'beef' => 'beefs', 'brother' => 'brothers', 'cafe' => 'cafes', 'chateau' => 'chateaux', 'child' => 'children', 'cookie' => 'cookies', 'corpus' => 'corpuses', 'cow' => 'cows', 'criterion' => 'criteria', 'curriculum' => 'curricula', 'demo' => 'demos', 'domino' => 'dominoes', 'echo' => 'echoes', 'foot' => 'feet', 'fungus' => 'fungi', 'ganglion' => 'ganglions', 'genie' => 'genies', 'genus' => 'genera', 'graffito' => 'graffiti', 'hippopotamus' => 'hippopotami', 'hoof' => 'hoofs', 'human' => 'humans', 'iris' => 'irises', 'leaf' => 'leaves', 'loaf' => 'loaves', 'man' => 'men', 'medium' => 'media', 'memorandum' => 'memoranda', 'money' => 'monies', 'mongoose' => 'mongooses', 'motto' => 'mottoes', 'move' => 'moves', 'mythos' => 'mythoi', 'niche' => 'niches', 'nucleus' => 'nuclei', 'numen' => 'numina', 'occiput' => 'occiputs', 'octopus' => 'octopuses', 'opus' => 'opuses', 'ox' => 'oxen', 'penis' => 'penises', 'person' => 'people', 'plateau' => 'plateaux', 'runner-up' => 'runners-up', 'sex' => 'sexes', 'soliloquy' => 'soliloquies', 'son-in-law' => 'sons-in-law', 'syllabus' => 'syllabi', 'testis' => 'testes', 'thief' => 'thieves', 'tooth' => 'teeth', 'tornado' => 'tornadoes', 'trilby' => 'trilbys', 'turf' => 'turfs', 'volcano' => 'volcanoes'));
        /**
         * Singular inflector rules.
         *
         * @var array
         */
        private static $singular = array('rules' => array('/(s)tatuses$/i' => '\\1\\2tatus', '/^(.*)(menu)s$/i' => '\\1\\2', '/(quiz)zes$/i' => '\\1', '/(matr)ices$/i' => '\\1ix', '/(vert|ind)ices$/i' => '\\1ex', '/^(ox)en/i' => '\\1', '/(alias)(es)*$/i' => '\\1', '/(buffal|her|potat|tomat|volcan)oes$/i' => '\\1o', '/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|viri?)i$/i' => '\\1us', '/([ftw]ax)es/i' => '\\1', '/(analys|ax|cris|test|thes)es$/i' => '\\1is', '/(shoe|slave)s$/i' => '\\1', '/(o)es$/i' => '\\1', '/ouses$/' => 'ouse', '/([^a])uses$/' => '\\1us', '/([m|l])ice$/i' => '\\1ouse', '/(x|ch|ss|sh)es$/i' => '\\1', '/(m)ovies$/i' => '\\1\\2ovie', '/(s)eries$/i' => '\\1\\2eries', '/([^aeiouy]|qu)ies$/i' => '\\1y', '/([lr])ves$/i' => '\\1f', '/(tive)s$/i' => '\\1', '/(hive)s$/i' => '\\1', '/(drive)s$/i' => '\\1', '/([^fo])ves$/i' => '\\1fe', '/(^analy)ses$/i' => '\\1sis', '/(analy|diagno|^ba|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis', '/([ti])a$/i' => '\\1um', '/(p)eople$/i' => '\\1\\2erson', '/(m)en$/i' => '\\1an', '/(c)hildren$/i' => '\\1\\2hild', '/(f)eet$/i' => '\\1oot', '/(n)ews$/i' => '\\1\\2ews', '/eaus$/' => 'eau', '/^(.*us)$/' => '\\1', '/s$/i' => ''), 'uninflected' => array('.*[nrlm]ese', '.*deer', '.*fish', '.*measles', '.*ois', '.*pox', '.*sheep', '.*ss'), 'irregular' => array('criteria' => 'criterion', 'curves' => 'curve', 'emphases' => 'emphasis', 'foes' => 'foe', 'hoaxes' => 'hoax', 'media' => 'medium', 'neuroses' => 'neurosis', 'waves' => 'wave', 'oases' => 'oasis'));
        /**
         * Words that should not be inflected.
         *
         * @var array
         */
        private static $uninflected = array('Amoyese', 'bison', 'Borghese', 'bream', 'breeches', 'britches', 'buffalo', 'cantus', 'carp', 'chassis', 'clippers', 'cod', 'coitus', 'Congoese', 'contretemps', 'corps', 'debris', 'diabetes', 'djinn', 'eland', 'elk', 'equipment', 'Faroese', 'flounder', 'Foochowese', 'gallows', 'Genevese', 'Genoese', 'Gilbertese', 'graffiti', 'headquarters', 'herpes', 'hijinks', 'Hottentotese', 'information', 'innings', 'jackanapes', 'Kiplingese', 'Kongoese', 'Lucchese', 'mackerel', 'Maltese', '.*?media', 'mews', 'moose', 'mumps', 'Nankingese', 'news', 'nexus', 'Niasese', 'Pekingese', 'Piedmontese', 'pincers', 'Pistoiese', 'pliers', 'Portuguese', 'proceedings', 'rabies', 'rice', 'rhinoceros', 'salmon', 'Sarawakese', 'scissors', 'sea[- ]bass', 'series', 'Shavese', 'shears', 'siemens', 'species', 'staff', 'swine', 'testes', 'trousers', 'trout', 'tuna', 'Vermontese', 'Wenchowese', 'whiting', 'wildebeest', 'Yengeese');
        /**
         * Method cache array.
         *
         * @var array
         */
        private static $cache = array();
        /**
         * The initial state of Inflector so reset() works.
         *
         * @var array
         */
        private static $initial_state = array();
        /**
         * Converts a word into the format for a Doctrine table name. Converts 'ModelName' to 'model_name'.
         *
         * @param string $word The word to tableize.
         *
         * @return string The tableized word.
         */
        public static function tableize($word)
        {
        }
        /**
         * Converts a word into the format for a Doctrine class name. Converts 'table_name' to 'TableName'.
         *
         * @param string $word The word to classify.
         *
         * @return string The classified word.
         */
        public static function classify($word)
        {
        }
        /**
         * Camelizes a word. This uses the classify() method and turns the first character to lowercase.
         *
         * @param string $word The word to camelize.
         *
         * @return string The camelized word.
         */
        public static function camelize($word)
        {
        }
        /**
         * Uppercases words with configurable delimeters between words.
         *
         * Takes a string and capitalizes all of the words, like PHP's built-in
         * ucwords function.  This extends that behavior, however, by allowing the
         * word delimeters to be configured, rather than only separating on
         * whitespace.
         *
         * Here is an example:
         * <code>
         * <?php
         * $string = 'top-o-the-morning to all_of_you!';
         * echo \Doctrine\Common\Inflector\Inflector::ucwords($string);
         * // Top-O-The-Morning To All_of_you!
         *
         * echo \Doctrine\Common\Inflector\Inflector::ucwords($string, '-_ ');
         * // Top-O-The-Morning To All_Of_You!
         * ?>
         * </code>
         *
         * @param string $string The string to operate on.
         * @param string $delimiters A list of word separators.
         *
         * @return string The string with all delimeter-separated words capitalized.
         */
        public static function ucwords($string, $delimiters = " \n\t\r\0\v-")
        {
        }
        /**
         * Clears Inflectors inflected value caches, and resets the inflection
         * rules to the initial values.
         *
         * @return void
         */
        public static function reset()
        {
        }
        /**
         * Adds custom inflection $rules, of either 'plural' or 'singular' $type.
         *
         * ### Usage:
         *
         * {{{
         * Inflector::rules('plural', array('/^(inflect)or$/i' => '\1ables'));
         * Inflector::rules('plural', array(
         *     'rules' => array('/^(inflect)ors$/i' => '\1ables'),
         *     'uninflected' => array('dontinflectme'),
         *     'irregular' => array('red' => 'redlings')
         * ));
         * }}}
         *
         * @param string  $type  The type of inflection, either 'plural' or 'singular'
         * @param array   $rules An array of rules to be added.
         * @param boolean $reset If true, will unset default inflections for all
         *                       new rules that are being defined in $rules.
         *
         * @return void
         */
        public static function rules($type, $rules, $reset = false)
        {
        }
        /**
         * Returns a word in plural form.
         *
         * @param string $word The word in singular form.
         *
         * @return string The word in plural form.
         */
        public static function pluralize($word)
        {
        }
        /**
         * Returns a word in singular form.
         *
         * @param string $word The word in plural form.
         *
         * @return string The word in singular form.
         */
        public static function singularize($word)
        {
        }
    }
}
namespace WP_CLI\Iterators {
    /**
     * Allows incrementally reading and parsing lines from a CSV file.
     */
    class CSV implements \Countable, \Iterator
    {
        const ROW_SIZE = 4096;
        private $filename;
        private $file_pointer;
        private $delimiter;
        private $columns;
        private $current_index;
        private $current_element;
        public function __construct($filename, $delimiter = ',')
        {
        }
        public function rewind()
        {
        }
        public function current()
        {
        }
        public function key()
        {
        }
        public function next()
        {
        }
        public function count()
        {
        }
        public function valid()
        {
        }
    }
    class Exception extends \RuntimeException
    {
    }
    /**
     * Iterates over results of a query, split into many queries via LIMIT and OFFSET
     *
     * @source https://gist.github.com/4060005
     */
    class Query implements \Iterator
    {
        private $chunk_size;
        private $query = '';
        private $count_query = '';
        private $global_index = 0;
        private $index_in_results = 0;
        private $results = array();
        private $row_count = 0;
        private $offset = 0;
        private $db = null;
        private $depleted = false;
        /**
         * Creates a new query iterator
         *
         * This will loop over all users, but will retrieve them 100 by 100:
         * <code>
         * foreach( new Iterators\Query( 'SELECT * FROM users', 100 ) as $user ) {
         *     tickle( $user );
         * }
         * </code>
         *
         * @param string $query The query as a string. It shouldn't include any LIMIT clauses
         * @param int $chunk_size How many rows to retrieve at once; default value is 500 (optional)
         */
        public function __construct($query, $chunk_size = 500)
        {
        }
        /**
         * Reduces the offset when the query row count shrinks
         *
         * In cases where the iterated rows are being updated such that they will no
         * longer be returned by the original query, the offset must be reduced to
         * iterate over all remaining rows.
         */
        private function adjust_offset_for_shrinking_result_set()
        {
        }
        private function load_items_from_db()
        {
        }
        public function current()
        {
        }
        public function key()
        {
        }
        public function next()
        {
        }
        public function rewind()
        {
        }
        public function valid()
        {
        }
    }
    /**
     * @source https://gist.github.com/4060005
     */
    class Table extends \WP_CLI\Iterators\Query
    {
        /**
         * Creates an iterator over a database table.
         *
         * <code>
         * foreach( new Iterators\Table( array( 'table' => $wpdb->posts, 'fields' => array( 'ID', 'post_content' ) ) ) as $post ) {
         *     count_words_for( $post->ID, $post->post_content );
         * }
         * </code>
         *
         * <code>
         * foreach( new Iterators\Table( array( 'table' => $wpdb->posts, 'where' => 'ID = 8 OR post_status = "publish"' ) ) as $post ) {
         *     …
         * }
         * </code>
         *
         * <code>
         * foreach( new PostIterator( array( 'table' => $wpdb->posts, 'where' => array( 'post_status' => 'publish', 'post_date_gmt BETWEEN x AND y' ) ) ) as $post ) {
         *     …
         * }
         * </code>
         *
         *
         * @param array $args Supported arguments:
         *      table – the name of the database table
         *      fields – an array of columns to get from the table, '*' is a valid value and the default
         *      where – conditions for filtering rows. Supports two formats:
         *              = string – this will be the where clause
         *              = array – each element is treated as a condition if it's positional, or as column => value if
         *                it's a key/value pair. In the latter case the value is automatically quoted and escaped
         *      append - add arbitrary extra SQL
         */
        public function __construct($args = array())
        {
        }
        private static function build_fields($fields)
        {
        }
        private static function build_where_conditions($where)
        {
        }
    }
    /**
     * Applies one or more callbacks to an item before returning it.
     */
    class Transform extends \IteratorIterator
    {
        private $transformers = array();
        public function add_transform($fn)
        {
        }
        public function current()
        {
        }
    }
}
namespace WP_CLI\Loggers {
    /**
     * Base logger class
     */
    abstract class Base
    {
        protected $in_color = false;
        public abstract function info($message);
        public abstract function success($message);
        public abstract function warning($message);
        /**
         * Retrieve the runner instance from the base CLI object. This facilitates
         * unit testing, where the WP_CLI instance isn't available
         *
         * @return Runner Instance of the runner class
         */
        protected function get_runner()
        {
        }
        /**
         * Write a message to STDERR, prefixed with "Debug: ".
         *
         * @param string $message Message to write.
         * @param string|bool $group Organize debug message to a specific group.
         * Use `false` for no group.
         */
        public function debug($message, $group = false)
        {
        }
        /**
         * Write a string to a resource.
         *
         * @param resource $handle Commonly STDOUT or STDERR.
         * @param string $str Message to write.
         */
        protected function write($handle, $str)
        {
        }
        /**
         * Output one line of message to a resource.
         *
         * @param string $message Message to write.
         * @param string $label Prefix message with a label.
         * @param string $color Colorize label with a given color.
         * @param resource $handle Resource to write to. Defaults to STDOUT.
         */
        protected function _line($message, $label, $color, $handle = STDOUT)
        {
        }
    }
    /**
     * Default logger for success, warning, error, and standard messages.
     */
    class Regular extends \WP_CLI\Loggers\Base
    {
        /**
         * @param bool $in_color Whether or not to Colorize strings.
         */
        public function __construct($in_color)
        {
        }
        /**
         * Write an informational message to STDOUT.
         *
         * @param string $message Message to write.
         */
        public function info($message)
        {
        }
        /**
         * Write a success message, prefixed with "Success: ".
         *
         * @param string $message Message to write.
         */
        public function success($message)
        {
        }
        /**
         * Write a warning message to STDERR, prefixed with "Warning: ".
         *
         * @param string $message Message to write.
         */
        public function warning($message)
        {
        }
        /**
         * Write an message to STDERR, prefixed with "Error: ".
         *
         * @param string $message Message to write.
         */
        public function error($message)
        {
        }
        /**
         * Similar to error( $message ), but outputs $message in a red box
         *
         * @param  array $message Message to write.
         */
        public function error_multi_line($message_lines)
        {
        }
    }
    /**
     * Execution logger captures all STDOUT and STDERR writes
     */
    class Execution extends \WP_CLI\Loggers\Regular
    {
        /**
         * Captured writes to STDOUT.
         */
        public $stdout = '';
        /**
         * Captured writes to STDERR.
         */
        public $stderr = '';
        /**
         * @param bool $in_color Whether or not to Colorize strings.
         */
        public function __construct($in_color = false)
        {
        }
        /**
         * Similar to error( $message ), but outputs $message in a red box
         *
         * @param  array $message Message to write.
         */
        public function error_multi_line($message_lines)
        {
        }
        /**
         * Write a string to a resource.
         *
         * @param resource $handle Commonly STDOUT or STDERR.
         * @param string $str Message to write.
         */
        protected function write($handle, $str)
        {
        }
        /**
         * Starts output buffering, using a callback to capture output from `echo`, `print`, `printf` (which write to the output buffer 'php://output' rather than STDOUT).
         */
        public function ob_start()
        {
        }
        /**
         * Callback for `ob_start()`.
         *
         * @param string $str String to write.
         * @return string Returns zero-length string so nothing gets written to the output buffer.
         */
        public function ob_start_callback($str)
        {
        }
        /**
         * To match `ob_start() above. Does an `ob_end_flush()`.
         */
        public function ob_end()
        {
        }
    }
    /**
     * Quiet logger only logs errors.
     */
    class Quiet extends \WP_CLI\Loggers\Base
    {
        /**
         * Informational messages aren't logged.
         *
         * @param string $message Message to write.
         */
        public function info($message)
        {
        }
        /**
         * Success messages aren't logged.
         *
         * @param string $message Message to write.
         */
        public function success($message)
        {
        }
        /**
         * Warning messages aren't logged.
         *
         * @param string $message Message to write.
         */
        public function warning($message)
        {
        }
        /**
         * Write an error message to STDERR, prefixed with "Error: ".
         *
         * @param string $message Message to write.
         */
        public function error($message)
        {
        }
        /**
         * Similar to error( $message ), but outputs $message in a red box
         *
         * @param  array $message Message to write.
         */
        public function error_multi_line($message_lines)
        {
        }
    }
}
namespace WP_CLI {
    /**
     * Escape route for not doing anything.
     */
    final class NoOp
    {
        public function __set($key, $value)
        {
        }
        public function __call($method, $args)
        {
        }
    }
    /**
     * A Composer Event subscriber so we can keep track of what's happening inside Composer
     */
    class PackageManagerEventSubscriber implements \Composer\EventDispatcher\EventSubscriberInterface
    {
        public static function getSubscribedEvents()
        {
        }
        public static function pre_install(\Composer\Installer\PackageEvent $event)
        {
        }
        public static function post_install(\Composer\Installer\PackageEvent $event)
        {
        }
    }
    /**
     * Run a system process, and learn what happened.
     */
    class Process
    {
        /**
         * @var string The full command to execute by the system.
         */
        private $command;
        /**
         * @var string|null The path of the working directory for the process or NULL if not specified (defaults to current working directory).
         */
        private $cwd;
        /**
         * @var array Environment variables to set when running the command.
         */
        private $env;
        /**
         * @var array Descriptor spec for `proc_open()`.
         */
        private static $descriptors = array(0 => STDIN, 1 => array('pipe', 'w'), 2 => array('pipe', 'w'));
        /**
         * @var bool Whether to log run time info or not.
         */
        public static $log_run_times = false;
        /**
         * @var array Array of process run time info, keyed by process command, each a 2-element array containing run time and run count.
         */
        public static $run_times = array();
        /**
         * @param string $command Command to execute.
         * @param string $cwd Directory to execute the command in.
         * @param array $env Environment variables to set when running the command.
         *
         * @return Process
         */
        public static function create($command, $cwd = null, $env = array())
        {
        }
        private function __construct()
        {
        }
        /**
         * Run the command.
         *
         * @return \WP_CLI\ProcessRun
         */
        public function run()
        {
        }
        /**
         * Run the command, but throw an Exception on error.
         *
         * @return \WP_CLI\ProcessRun
         */
        public function run_check()
        {
        }
        /**
         * Run the command, but throw an Exception on error.
         * Same as `run_check()` above, but checks the correct stderr.
         *
         * @return \WP_CLI\ProcessRun
         */
        public function run_check_stderr()
        {
        }
    }
    /**
     * Results of an executed command.
     */
    class ProcessRun
    {
        /**
         * @var string The full command executed by the system.
         */
        public $command;
        /**
         * @var string Captured output from the process' STDOUT.
         */
        public $stdout;
        /**
         * @var string Captured output from the process' STDERR.
         */
        public $stderr;
        /**
         * @var string|null The path of the working directory for the process or NULL if not specified (defaults to current working directory).
         */
        public $cwd;
        /**
         * @var array Environment variables set for this process.
         */
        public $env;
        /**
         * @var int Exit code of the process.
         */
        public $return_code;
        /**
         * @var float The run time of the process.
         */
        public $run_time;
        /**
         * @var array $props Properties of executed command.
         */
        public function __construct($props)
        {
        }
        /**
         * Return properties of executed command as a string.
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    /**
     * Performs the execution of a command.
     *
     * @package WP_CLI
     */
    class Runner
    {
        private $global_config_path;
        private $project_config_path;
        private $config;
        private $extra_config;
        private $alias;
        private $aliases;
        private $arguments;
        private $assoc_args;
        private $runtime_config;
        private $colorize = false;
        private $early_invoke = array();
        private $global_config_path_debug;
        private $project_config_path_debug;
        private $required_files;
        public function __get($key)
        {
        }
        /**
         * Register a command for early invocation, generally before WordPress loads.
         *
         * @param string $when Named execution hook
         * @param WP_CLI\Dispatcher\Subcommand $command
         */
        public function register_early_invoke($when, $command)
        {
        }
        /**
         * Perform the early invocation of a command.
         *
         * @param string $when Named execution hook
         */
        private function do_early_invoke($when)
        {
        }
        /**
         * Get the path to the global configuration YAML file.
         *
         * @param bool $create_config_file Optional. If a config file doesn't exist,
         *                                 should it be created? Defaults to false.
         *
         * @return string|false
         */
        public function get_global_config_path($create_config_file = false)
        {
        }
        /**
         * Get the path to the project-specific configuration
         * YAML file.
         * wp-cli.local.yml takes priority over wp-cli.yml.
         *
         * @return string|false
         */
        public function get_project_config_path()
        {
        }
        /**
         * Get the path to the packages directory
         *
         * @return string
         */
        public function get_packages_dir_path()
        {
        }
        /**
         * Attempts to find the path to the WP installation inside index.php
         *
         * @param string $index_path
         * @return string|false
         */
        private static function extract_subdir_path($index_path)
        {
        }
        /**
         * Find the directory that contains the WordPress files.
         * Defaults to the current working dir.
         *
         * @return string An absolute path
         */
        private function find_wp_root()
        {
        }
        /**
         * Set WordPress root as a given path.
         *
         * @param string $path
         */
        private static function set_wp_root($path)
        {
        }
        /**
         * Guess which URL context WP-CLI has been invoked under.
         *
         * @param array $assoc_args
         * @return string|false
         */
        private static function guess_url($assoc_args)
        {
        }
        private function cmd_starts_with($prefix)
        {
        }
        /**
         * Given positional arguments, find the command to execute.
         *
         * @param array $args
         * @return array|string Command, args, and path on success; error message on failure
         */
        public function find_command_to_run($args)
        {
        }
        /**
         * Find the WP-CLI command to run given arguments, and invoke it.
         *
         * @param array $args        Positional arguments including command name
         * @param array $assoc_args  Associative arguments for the command.
         * @param array $options     Configuration options for the function.
         */
        public function run_command($args, $assoc_args = array(), $options = array())
        {
        }
        /**
         * Show synopsis if the called command is a composite command
         */
        public function show_synopsis_if_composite_command()
        {
        }
        private function run_command_and_exit($help_exit_warning = '')
        {
        }
        /**
         * Perform a command against a remote server over SSH (or a container using
         * scheme of "docker" or "docker-compose").
         *
         * @param string $connection_string Passed connection string.
         * @return void
         */
        private function run_ssh_command($connection_string)
        {
        }
        /**
         * Generate a shell command from the parsed connection string.
         *
         * @param array  $bits       Parsed connection string.
         * @param string $wp_command WP-CLI command to run.
         * @return string
         */
        private function generate_ssh_command($bits, $wp_command)
        {
        }
        /**
         * Check whether a given command is disabled by the config
         *
         * @return bool
         */
        public function is_command_disabled($command)
        {
        }
        /**
         * Returns wp-config.php code, skipping the loading of wp-settings.php
         *
         * @param string $wp_config_file_path Optional. Config file path. If left empty, it tries to
         * locate the wp-config.php file automatically.
         *
         * @return string
         */
        public function get_wp_config_code($wp_config_path = '')
        {
        }
        /**
         * Transparently convert deprecated syntaxes
         *
         * @param array $args
         * @param array $assoc_args
         * @return array
         */
        private static function back_compat_conversions($args, $assoc_args)
        {
        }
        /**
         * Whether or not the output should be rendered in color
         *
         * @return bool
         */
        public function in_color()
        {
        }
        public function init_colorization()
        {
        }
        public function init_logger()
        {
        }
        public function get_required_files()
        {
        }
        /**
         * Do WordPress core files exist?
         *
         * @return bool
         */
        private function wp_exists()
        {
        }
        /**
         * Are WordPress core files readable?
         *
         * @return bool
         */
        private function wp_is_readable()
        {
        }
        private function check_wp_version()
        {
        }
        public function init_config()
        {
        }
        private function check_root()
        {
        }
        private function run_alias_group($aliases)
        {
        }
        private function set_alias($alias)
        {
        }
        public function start()
        {
        }
        /**
         * Load WordPress, if it hasn't already been loaded
         */
        public function load_wordpress()
        {
        }
        private static function fake_current_site_blog($url_parts)
        {
        }
        /**
         * Called after wp-config.php is eval'd, to potentially reset `--url`
         */
        private function maybe_update_url_from_domain_constant()
        {
        }
        /**
         * Set up hooks meant to run during the WordPress bootstrap process
         */
        private function setup_bootstrap_hooks()
        {
        }
        /**
         * Set up the filters to skip the loaded plugins
         */
        private function setup_skip_plugins_filters()
        {
        }
        /**
         * Set up the filters to skip the loaded theme
         */
        public function action_setup_theme_wp_cli_skip_themes()
        {
        }
        /**
         * Whether or not this WordPress installation is multisite.
         *
         * For use after wp-config.php has loaded, but before the rest of WordPress
         * is loaded.
         */
        private function is_multisite()
        {
        }
        /**
         * Error handler for `wp_die()` when the command is help to try to trap errors (db connection failure in particular) during WordPress load.
         */
        public function help_wp_die_handler($message)
        {
        }
        /**
         * Check whether there's a WP-CLI update available, and suggest update if so.
         */
        private function auto_check_update()
        {
        }
        /**
         * Get a suggestion on similar (sub)commands when the user entered an
         * unknown (sub)command.
         *
         * @param string           $entry        User entry that didn't match an
         *                                       existing command.
         * @param CompositeCommand $root_command Root command to start search for
         *                                       suggestions at.
         *
         * @return string Suggestion that fits the user entry, or an empty string.
         */
        private function get_subcommand_suggestion($entry, \WP_CLI\Dispatcher\CompositeCommand $root_command = null)
        {
        }
        /**
         * Recursive method to enumerate all known commands.
         *
         * @param CompositeCommand $command Composite command to recurse over.
         * @param array            $list    Reference to list accumulating results.
         * @param string           $parent  Parent command to use as prefix.
         */
        private function enumerate_commands(\WP_CLI\Dispatcher\CompositeCommand $command, array &$list, $parent = '')
        {
        }
        /**
         * Enables (almost) full PHP error reporting to stderr.
         */
        private function enable_error_reporting()
        {
        }
    }
    /**
     * Generate a synopsis from a command's PHPdoc arguments.
     * Turns something like "<object-id>..."
     * into [ optional=>false, type=>positional, repeating=>true, name=>object-id ]
     */
    class SynopsisParser
    {
        /**
         * @param string A synopsis
         * @return array List of parameters
         */
        public static function parse($synopsis)
        {
        }
        /**
         * Render the Synopsis into a format string.
         *
         * @param array $synopsis A structured synopsis. This might get reordered
         *                        to match the parsed output.
         * @return string Rendered synopsis.
         */
        public static function render(&$synopsis)
        {
        }
        /**
         * Classify argument attributes based on its syntax.
         *
         * @param string $token
         * @return array $param
         */
        private static function classify_token($token)
        {
        }
        /**
         * An optional parameter is surrounded by square brackets.
         *
         * @param string $token
         * @return array
         */
        private static function is_optional($token)
        {
        }
        /**
         * A repeating parameter is followed by an ellipsis.
         *
         * @param string $token
         * @return array
         */
        private static function is_repeating($token)
        {
        }
    }
    /**
     * Checks if the list of parameters matches the specification defined in the synopsis.
     */
    class SynopsisValidator
    {
        /**
         * @var array $spec Structured representation of command synopsis.
         */
        private $spec = array();
        /**
         * @param string $synopsis Command's synopsis.
         */
        public function __construct($synopsis)
        {
        }
        /**
         * Get any unknown arguments.
         *
         * @return array
         */
        public function get_unknown()
        {
        }
        /**
         * Check whether there are enough positional arguments.
         *
         * @param array $args Positional arguments.
         * @return bool
         */
        public function enough_positionals($args)
        {
        }
        /**
         * Check for any unknown positionals.
         *
         * @param array $args Positional arguments.
         * @return array
         */
        public function unknown_positionals($args)
        {
        }
        /**
         * Check that all required keys are present and that they have values.
         *
         * @param array $assoc_args Parameters passed to command.
         * @return array
         */
        public function validate_assoc($assoc_args)
        {
        }
        /**
         * Check whether there are unknown parameters supplied.
         *
         * @param array $assoc_args Parameters passed to command.
         * @return array|false
         */
        public function unknown_assoc($assoc_args)
        {
        }
        /**
         * Filters a list of associative arrays, based on a set of key => value arguments.
         *
         * @param array $args An array of key => value arguments to match against
         * @param string $operator
         * @return array
         */
        private function query_spec($args, $operator = 'AND')
        {
        }
    }
    /**
     * A Upgrader Skin for WordPress that only generates plain-text
     *
     * @package wp-cli
     */
    class UpgraderSkin extends \WP_Upgrader_Skin
    {
        use \WP_CLI\Compat\FeedbackMethodTrait;
        public $api;
        public function header()
        {
        }
        public function footer()
        {
        }
        public function bulk_header()
        {
        }
        public function bulk_footer()
        {
        }
        public function error($error)
        {
        }
        /**
         * Process the feedback collected through the compat indirection.
         *
         * @param string $string String to use as feedback message.
         * @param array $args Array of additional arguments to process.
         */
        public function process_feedback($string, $args)
        {
        }
    }
    /**
     * Manage caching with whitelisting
     *
     * @package WP_CLI
     */
    class WpHttpCacheManager
    {
        /**
         * @var array map whitelisted urls to keys and ttls
         */
        protected $whitelist = array();
        /**
         * @var FileCache
         */
        protected $cache;
        /**
         * @param FileCache $cache
         */
        public function __construct(\WP_CLI\FileCache $cache)
        {
        }
        /**
         * short circuit wp http api with cached file
         */
        public function filter_pre_http_request($response, $args, $url)
        {
        }
        /**
         * cache wp http api downloads
         *
         * @param array $response
         * @param array $args
         * @param string $url
         */
        public function filter_http_response($response, $args, $url)
        {
        }
        /**
         * whitelist a package url
         *
         * @param string $url
         * @param string $group   package group (themes, plugins, ...)
         * @param string $slug    package slug
         * @param string $version package version
         * @param int    $ttl
         */
        public function whitelist_package($url, $group, $slug, $version, $ttl = null)
        {
        }
        /**
         * whitelist a url
         *
         * @param string $url
         * @param string $key
         * @param int    $ttl
         */
        public function whitelist_url($url, $key = null, $ttl = null)
        {
        }
        /**
         * check if url is whitelisted
         *
         * @param string $url
         * @return bool
         */
        public function is_whitelisted($url)
        {
        }
    }
}
namespace {
    /**
     * Various utilities for WP-CLI commands.
     */
    class WP_CLI
    {
        private static $configurator;
        private static $logger;
        private static $hooks = array();
        private static $hooks_passed = array();
        private static $capture_exit = \false;
        private static $deferred_additions = array();
        /**
         * Set the logger instance.
         *
         * @param object $logger
         */
        public static function set_logger($logger)
        {
        }
        /**
         * Get the Configurator instance
         *
         * @return \WP_CLI\Configurator
         */
        public static function get_configurator()
        {
        }
        public static function get_root_command()
        {
        }
        public static function get_runner()
        {
        }
        /**
         * @return FileCache
         */
        public static function get_cache()
        {
        }
        /**
         * Set the context in which WP-CLI should be run
         */
        public static function set_url($url)
        {
        }
        private static function set_url_params($url_parts)
        {
        }
        /**
         * @return WpHttpCacheManager
         */
        public static function get_http_cache_manager()
        {
        }
        /**
         * Colorize a string for output.
         *
         * Yes, you can change the color of command line text too. For instance,
         * here's how `WP_CLI::success()` colorizes "Success: "
         *
         * ```
         * WP_CLI::colorize( "%GSuccess:%n " )
         * ```
         *
         * Uses `\cli\Colors::colorize()` to transform color tokens to display
         * settings. Choose from the following tokens (and note 'reset'):
         *
         * * %y => ['color' => 'yellow'],
         * * %g => ['color' => 'green'],
         * * %b => ['color' => 'blue'],
         * * %r => ['color' => 'red'],
         * * %p => ['color' => 'magenta'],
         * * %m => ['color' => 'magenta'],
         * * %c => ['color' => 'cyan'],
         * * %w => ['color' => 'grey'],
         * * %k => ['color' => 'black'],
         * * %n => ['color' => 'reset'],
         * * %Y => ['color' => 'yellow', 'style' => 'bright'],
         * * %G => ['color' => 'green', 'style' => 'bright'],
         * * %B => ['color' => 'blue', 'style' => 'bright'],
         * * %R => ['color' => 'red', 'style' => 'bright'],
         * * %P => ['color' => 'magenta', 'style' => 'bright'],
         * * %M => ['color' => 'magenta', 'style' => 'bright'],
         * * %C => ['color' => 'cyan', 'style' => 'bright'],
         * * %W => ['color' => 'grey', 'style' => 'bright'],
         * * %K => ['color' => 'black', 'style' => 'bright'],
         * * %N => ['color' => 'reset', 'style' => 'bright'],
         * * %3 => ['background' => 'yellow'],
         * * %2 => ['background' => 'green'],
         * * %4 => ['background' => 'blue'],
         * * %1 => ['background' => 'red'],
         * * %5 => ['background' => 'magenta'],
         * * %6 => ['background' => 'cyan'],
         * * %7 => ['background' => 'grey'],
         * * %0 => ['background' => 'black'],
         * * %F => ['style' => 'blink'],
         * * %U => ['style' => 'underline'],
         * * %8 => ['style' => 'inverse'],
         * * %9 => ['style' => 'bright'],
         * * %_ => ['style' => 'bright']
         *
         * @access public
         * @category Output
         *
         * @param string $string String to colorize for output, with color tokens.
         * @return string Colorized string.
         */
        public static function colorize($string)
        {
        }
        /**
         * Schedule a callback to be executed at a certain point.
         *
         * Hooks conceptually are very similar to WordPress actions. WP-CLI hooks
         * are typically called before WordPress is loaded.
         *
         * WP-CLI hooks include:
         *
         * * `before_add_command:<command>` - Before the command is added.
         * * `after_add_command:<command>` - After the command was added.
         * * `before_invoke:<command>` - Just before a command is invoked.
         * * `after_invoke:<command>` - Just after a command is invoked.
         * * `find_command_to_run_pre` - Just before WP-CLI finds the command to run.
         * * `before_wp_load` - Just before the WP load process begins.
         * * `before_wp_config_load` - After wp-config.php has been located.
         * * `after_wp_config_load` - After wp-config.php has been loaded into scope.
         * * `after_wp_load` - Just after the WP load process has completed.
         * * `before_run_command` - Just before the command is executed.
         *
         * WP-CLI commands can create their own hooks with `WP_CLI::do_hook()`.
         *
         * If additional arguments are passed through the `WP_CLI::do_hook()` call,
         * these will be passed on to the callback provided by `WP_CLI::add_hook()`.
         *
         * ```
         * # `wp network meta` confirms command is executing in multisite context.
         * WP_CLI::add_command( 'network meta', 'Network_Meta_Command', array(
         *    'before_invoke' => function () {
         *        if ( !is_multisite() ) {
         *            WP_CLI::error( 'This is not a multisite installation.' );
         *        }
         *    }
         * ) );
         * ```
         *
         * @access public
         * @category Registration
         *
         * @param string $when Identifier for the hook.
         * @param mixed $callback Callback to execute when hook is called.
         * @return null
         */
        public static function add_hook($when, $callback)
        {
        }
        /**
         * Execute callbacks registered to a given hook.
         *
         * See `WP_CLI::add_hook()` for details on WP-CLI's internal hook system.
         * Commands can provide and call their own hooks.
         *
         * @access public
         * @category Registration
         *
         * @param string $when Identifier for the hook.
         * @param mixed ... Optional. Arguments that will be passed onto the
         *                  callback provided by `WP_CLI::add_hook()`.
         * @return null
         */
        public static function do_hook($when)
        {
        }
        /**
         * Add a callback to a WordPress action or filter.
         *
         * `add_action()` without needing access to `add_action()`. If WordPress is
         * already loaded though, you should use `add_action()` (and `add_filter()`)
         * instead.
         *
         * @access public
         * @category Registration
         *
         * @param string $tag Named WordPress action or filter.
         * @param mixed $function_to_add Callable to execute when the action or filter is evaluated.
         * @param integer $priority Priority to add the callback as.
         * @param integer $accepted_args Number of arguments to pass to callback.
         * @return true
         */
        public static function add_wp_hook($tag, $function_to_add, $priority = 10, $accepted_args = 1)
        {
        }
        /**
         * Build Unique ID for storage and retrieval.
         *
         * Essentially _wp_filter_build_unique_id() without needing access to _wp_filter_build_unique_id()
         */
        private static function wp_hook_build_unique_id($tag, $function, $priority)
        {
        }
        /**
         * Register a command to WP-CLI.
         *
         * WP-CLI supports using any callable class, function, or closure as a
         * command. `WP_CLI::add_command()` is used for both internal and
         * third-party command registration.
         *
         * Command arguments are parsed from PHPDoc by default, but also can be
         * supplied as an optional third argument during registration.
         *
         * ```
         * # Register a custom 'foo' command to output a supplied positional param.
         * #
         * # $ wp foo bar --append=qux
         * # Success: bar qux
         *
         * /**
         *  * My awesome closure command
         *  *
         *  * <message>
         *  * : An awesome message to display
         *  *
         *  * --append=<message>
         *  * : An awesome message to append to the original message.
         *  *
         *  * @when before_wp_load
         *  *\/
         * $foo = function( $args, $assoc_args ) {
         *     WP_CLI::success( $args[0] . ' ' . $assoc_args['append'] );
         * };
         * WP_CLI::add_command( 'foo', $foo );
         * ```
         *
         * @access public
         * @category Registration
         *
         * @param string   $name Name for the command (e.g. "post list" or "site empty").
         * @param callable $callable Command implementation as a class, function or closure.
         * @param array    $args {
         *    Optional. An associative array with additional registration parameters.
         *
         *    @type callable $before_invoke Callback to execute before invoking the command.
         *    @type callable $after_invoke  Callback to execute after invoking the command.
         *    @type string   $shortdesc     Short description (80 char or less) for the command.
         *    @type string   $longdesc      Description of arbitrary length for examples, etc.
         *    @type string   $synopsis      The synopsis for the command (string or array).
         *    @type string   $when          Execute callback on a named WP-CLI hook (e.g. before_wp_load).
         *    @type bool     $is_deferred   Whether the command addition had already been deferred.
         * }
         * @return bool True on success, false if deferred, hard error if registration failed.
         */
        public static function add_command($name, $callable, $args = array())
        {
        }
        /**
         * Defer command addition for a sub-command if the parent command is not yet
         * registered.
         *
         * @param string $name     Name for the sub-command.
         * @param string $parent   Name for the parent command.
         * @param string $callable Command implementation as a class, function or closure.
         * @param array  $args     Optional. See `WP_CLI::add_command()` for details.
         */
        private static function defer_command_addition($name, $parent, $callable, $args = array())
        {
        }
        /**
         * Get the list of outstanding deferred command additions.
         *
         * @return array Array of outstanding command additions.
         */
        public static function get_deferred_additions()
        {
        }
        /**
         * Remove a command addition from the list of outstanding deferred additions.
         */
        public static function remove_deferred_addition($name)
        {
        }
        /**
         * Display informational message without prefix, and ignore `--quiet`.
         *
         * Message is written to STDOUT. `WP_CLI::log()` is typically recommended;
         * `WP_CLI::line()` is included for historical compat.
         *
         * @access public
         * @category Output
         *
         * @param string $message Message to display to the end user.
         * @return null
         */
        public static function line($message = '')
        {
        }
        /**
         * Display informational message without prefix.
         *
         * Message is written to STDOUT, or discarded when `--quiet` flag is supplied.
         *
         * ```
         * # `wp cli update` lets user know of each step in the update process.
         * WP_CLI::log( sprintf( 'Downloading from %s...', $download_url ) );
         * ```
         *
         * @access public
         * @category Output
         *
         * @param string $message Message to write to STDOUT.
         */
        public static function log($message)
        {
        }
        /**
         * Display success message prefixed with "Success: ".
         *
         * Success message is written to STDOUT.
         *
         * Typically recommended to inform user of successful script conclusion.
         *
         * ```
         * # wp rewrite flush expects 'rewrite_rules' option to be set after flush.
         * flush_rewrite_rules( \WP_CLI\Utils\get_flag_value( $assoc_args, 'hard' ) );
         * if ( ! get_option( 'rewrite_rules' ) ) {
         *     WP_CLI::warning( "Rewrite rules are empty." );
         * } else {
         *     WP_CLI::success( 'Rewrite rules flushed.' );
         * }
         * ```
         *
         * @access public
         * @category Output
         *
         * @param string $message Message to write to STDOUT.
         * @return null
         */
        public static function success($message)
        {
        }
        /**
         * Display debug message prefixed with "Debug: " when `--debug` is used.
         *
         * Debug message is written to STDERR, and includes script execution time.
         *
         * Helpful for optionally showing greater detail when needed. Used throughout
         * WP-CLI bootstrap process for easier debugging and profiling.
         *
         * ```
         * # Called in `WP_CLI\Runner::set_wp_root()`.
         * private static function set_wp_root( $path ) {
         *     define( 'ABSPATH', Utils\trailingslashit( $path ) );
         *     WP_CLI::debug( 'ABSPATH defined: ' . ABSPATH );
         *     $_SERVER['DOCUMENT_ROOT'] = realpath( $path );
         * }
         *
         * # Debug details only appear when `--debug` is used.
         * # $ wp --debug
         * # [...]
         * # Debug: ABSPATH defined: /srv/www/wordpress-develop.dev/src/ (0.225s)
         * ```
         *
         * @access public
         * @category Output
         *
         * @param string $message Message to write to STDERR.
         * @param string|bool $group Organize debug message to a specific group.
         * Use `false` to not group the message.
         * @return null
         */
        public static function debug($message, $group = \false)
        {
        }
        /**
         * Display warning message prefixed with "Warning: ".
         *
         * Warning message is written to STDERR.
         *
         * Use instead of `WP_CLI::debug()` when script execution should be permitted
         * to continue.
         *
         * ```
         * # `wp plugin activate` skips activation when plugin is network active.
         * $status = $this->get_status( $plugin->file );
         * // Network-active is the highest level of activation status
         * if ( 'active-network' === $status ) {
         *   WP_CLI::warning( "Plugin '{$plugin->name}' is already network active." );
         *   continue;
         * }
         * ```
         *
         * @access public
         * @category Output
         *
         * @param string $message Message to write to STDERR.
         * @return null
         */
        public static function warning($message)
        {
        }
        /**
         * Display error message prefixed with "Error: " and exit script.
         *
         * Error message is written to STDERR. Defaults to halting script execution
         * with return code 1.
         *
         * Use `WP_CLI::warning()` instead when script execution should be permitted
         * to continue.
         *
         * ```
         * # `wp cache flush` considers flush failure to be a fatal error.
         * if ( false === wp_cache_flush() ) {
         *     WP_CLI::error( 'The object cache could not be flushed.' );
         * }
         * ```
         *
         * @access public
         * @category Output
         *
         * @param string|WP_Error|Exception  $message Message to write to STDERR.
         * @param boolean|integer            $exit    True defaults to exit(1).
         * @return null
         */
        public static function error($message, $exit = \true)
        {
        }
        /**
         * Halt script execution with a specific return code.
         *
         * Permits script execution to be overloaded by `WP_CLI::runcommand()`
         *
         * @access public
         * @category Output
         *
         * @param integer $return_code
         */
        public static function halt($return_code)
        {
        }
        /**
         * Display a multi-line error message in a red box. Doesn't exit script.
         *
         * Error message is written to STDERR.
         *
         * @access public
         * @category Output
         *
         * @param array $message Multi-line error message to be displayed.
         */
        public static function error_multi_line($message_lines)
        {
        }
        /**
         * Ask for confirmation before running a destructive operation.
         *
         * If 'y' is provided to the question, the script execution continues. If
         * 'n' or any other response is provided to the question, script exits.
         *
         * ```
         * # `wp db drop` asks for confirmation before dropping the database.
         *
         * WP_CLI::confirm( "Are you sure you want to drop the database?", $assoc_args );
         * ```
         *
         * @access public
         * @category Input
         *
         * @param string $question Question to display before the prompt.
         * @param array $assoc_args Skips prompt if 'yes' is provided.
         */
        public static function confirm($question, $assoc_args = array())
        {
        }
        /**
         * Read value from a positional argument or from STDIN.
         *
         * @param array $args The list of positional arguments.
         * @param int $index At which position to check for the value.
         *
         * @return string
         */
        public static function get_value_from_arg_or_stdin($args, $index)
        {
        }
        /**
         * Read a value, from various formats.
         *
         * @access public
         * @category Input
         *
         * @param mixed $value
         * @param array $assoc_args
         */
        public static function read_value($raw_value, $assoc_args = array())
        {
        }
        /**
         * Display a value, in various formats
         *
         * @param mixed $value Value to display.
         * @param array $assoc_args Arguments passed to the command, determining format.
         */
        public static function print_value($value, $assoc_args = array())
        {
        }
        /**
         * Convert a WP_Error or Exception into a string
         *
         * @param mixed $errors
         * @throws \InvalidArgumentException
         *
         * @return string
         */
        public static function error_to_string($errors)
        {
        }
        /**
         * Launch an arbitrary external process that takes over I/O.
         *
         * ```
         * # `wp core download` falls back to the `tar` binary when PharData isn't available
         * if ( ! class_exists( 'PharData' ) ) {
         *     $cmd = "tar xz --strip-components=1 --directory=%s -f $tarball";
         *     WP_CLI::launch( Utils\esc_cmd( $cmd, $dest ) );
         *     return;
         * }
         * ```
         *
         * @access public
         * @category Execution
         *
         * @param string $command External process to launch.
         * @param boolean $exit_on_error Whether to exit if the command returns an elevated return code.
         * @param boolean $return_detailed Whether to return an exit status (default) or detailed execution results.
         * @return int|\WP_CLI\ProcessRun The command exit status, or a ProcessRun object for full details.
         */
        public static function launch($command, $exit_on_error = \true, $return_detailed = \false)
        {
        }
        /**
         * Run a WP-CLI command in a new process reusing the current runtime arguments.
         *
         * Use `WP_CLI::runcommand()` instead, which is easier to use and works better.
         *
         * Note: While this command does persist a limited set of runtime arguments,
         * it *does not* persist environment variables. Practically speaking, WP-CLI
         * packages won't be loaded when using WP_CLI::launch_self() because the
         * launched process doesn't have access to the current process $HOME.
         *
         * @access public
         * @category Execution
         *
         * @param string $command WP-CLI command to call.
         * @param array $args Positional arguments to include when calling the command.
         * @param array $assoc_args Associative arguments to include when calling the command.
         * @param bool $exit_on_error Whether to exit if the command returns an elevated return code.
         * @param bool $return_detailed Whether to return an exit status (default) or detailed execution results.
         * @param array $runtime_args Override one or more global args (path,url,user,allow-root)
         * @return int|\WP_CLI\ProcessRun The command exit status, or a ProcessRun instance
         */
        public static function launch_self($command, $args = array(), $assoc_args = array(), $exit_on_error = \true, $return_detailed = \false, $runtime_args = array())
        {
        }
        /**
         * Get the path to the PHP binary used when executing WP-CLI.
         *
         * Environment values permit specific binaries to be indicated.
         *
         * Note: moved to Utils, left for BC.
         *
         * @access public
         * @category System
         *
         * @return string
         */
        public static function get_php_binary()
        {
        }
        /**
         * Confirm that a global configuration parameter does exist.
         *
         * @access public
         * @category Input
         *
         * @param string $key Config parameter key to check.
         *
         * @return bool
         */
        public static function has_config($key)
        {
        }
        /**
         * Get values of global configuration parameters.
         *
         * Provides access to `--path=<path>`, `--url=<url>`, and other values of
         * the [global configuration parameters](https://wp-cli.org/config/).
         *
         * ```
         * WP_CLI::log( 'The --url=<url> value is: ' . WP_CLI::get_config( 'url' ) );
         * ```
         *
         * @access public
         * @category Input
         *
         * @param string $key Get value for a specific global configuration parameter.
         * @return mixed
         */
        public static function get_config($key = \null)
        {
        }
        /**
         * Run a WP-CLI command.
         *
         * Launches a new child process to run a specified WP-CLI command.
         * Optionally:
         *
         * * Run the command in an existing process.
         * * Prevent halting script execution on error.
         * * Capture and return STDOUT, or full details about command execution.
         * * Parse JSON output if the command rendered it.
         *
         * ```
         * $options = array(
         *   'return'     => true,   // Return 'STDOUT'; use 'all' for full object.
         *   'parse'      => 'json', // Parse captured STDOUT to JSON array.
         *   'launch'     => false,  // Reuse the current process.
         *   'exit_error' => true,   // Halt script execution on error.
         * );
         * $plugins = WP_CLI::runcommand( 'plugin list --format=json', $options );
         * ```
         *
         * @access public
         * @category Execution
         *
         * @param string $command WP-CLI command to run, including arguments.
         * @param array  $options Configuration options for command execution.
         * @return mixed
         */
        public static function runcommand($command, $options = array())
        {
        }
        /**
         * Run a given command within the current process using the same global
         * parameters.
         *
         * Use `WP_CLI::runcommand()` instead, which is easier to use and works better.
         *
         * To run a command using a new process with the same global parameters,
         * use WP_CLI::launch_self(). To run a command using a new process with
         * different global parameters, use WP_CLI::launch().
         *
         * ```
         * ob_start();
         * WP_CLI::run_command( array( 'cli', 'cmd-dump' ) );
         * $ret = ob_get_clean();
         * ```
         *
         * @access public
         * @category Execution
         *
         * @param array $args Positional arguments including command name.
         * @param array $assoc_args
         */
        public static function run_command($args, $assoc_args = array())
        {
        }
        // DEPRECATED STUFF
        public static function add_man_dir()
        {
        }
        // back-compat
        public static function out($str)
        {
        }
        // back-compat
        // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- Deprecated method.
        public static function addCommand($name, $class)
        {
        }
    }
    /**
     * Retrieves, sets and updates aliases for WordPress Installations.
     *
     * Aliases are shorthand references to WordPress installs. For instance,
     * `@dev` could refer to a development install and `@prod` could refer to a production install.
     * This command gives you and option to add, update and delete, the registered aliases you have available.
     *
     * ## EXAMPLES
     *
     *     # List alias information.
     *     $ wp cli alias list
     *     list
     *     ---
     *     @all: Run command against every registered alias.
     *     @local:
     *       user: wpcli
     *       path: /Users/wpcli/sites/testsite
     *
     *     # Get alias information.
     *     $ wp cli alias get @dev
     *     ssh: dev@somedeve.env:12345/home/dev/
     *
     *     # Add alias.
     *     $ wp cli alias add @prod --set-ssh=login@host --set-path=/path/to/wordpress/install/ --set-user=wpcli
     *     Success: Added '@prod' alias.
     *
     *     # Update alias.
     *     $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/
     *     Success: Updated 'prod' alias.
     *
     *     # Delete alias.
     *     $ wp cli alias delete @prod
     *     Success: Deleted '@prod' alias.
     *
     * @package wp-cli
     * @when    before_wp_load
     */
    class CLI_Alias_Command extends \WP_CLI_Command
    {
        /**
         * Lists available WP-CLI aliases.
         *
         * ## OPTIONS
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: yaml
         * options:
         *   - yaml
         *   - json
         *   - var_export
         * ---
         *
         * ## EXAMPLES
         *
         *     # List all available aliases.
         *     $ wp cli alias list
         *     ---
         *     @all: Run command against every registered alias.
         *     @prod:
         *       ssh: runcommand@runcommand.io~/webapps/production
         *     @dev:
         *       ssh: vagrant@192.168.50.10/srv/www/runcommand.dev
         *     @both:
         *       - @prod
         *       - @dev
         *
         * @subcommand list
         */
        public function list_($args, $assoc_args)
        {
        }
        /**
         * Gets the value for an alias.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the alias.
         *
         * ## EXAMPLES
         *
         *     # Get alias.
         *     $ wp cli alias get @prod
         *     ssh: dev@somedeve.env:12345/home/dev/
         */
        public function get($args, $assoc_args)
        {
        }
        /**
         * Creates an alias.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the alias.
         *
         * [--set-user=<user>]
         * : Set user for alias.
         *
         * [--set-url=<url>]
         * : Set url for alias.
         *
         * [--set-path=<path>]
         * : Set path for alias.
         *
         * [--set-ssh=<ssh>]
         * : Set ssh for alias.
         *
         * [--set-http=<http>]
         * : Set http for alias.
         *
         * [--grouping=<grouping>]
         * : For grouping multiple aliases.
         *
         * [--config=<config>]
         * : Config file to be considered for operations.
         * ---
         * default: global
         * options:
         *   - global
         *   - project
         * ---
         *
         * ## EXAMPLES
         *
         *     # Add alias to global config.
         *     $ wp cli alias add @prod  --set-ssh=login@host --set-path=/path/to/wordpress/install/ --set-user=wpcli
         *     Success: Added '@prod' alias.
         *
         *     # Add alias to project config.
         *     $ wp cli alias add @prod --set-ssh=login@host --set-path=/path/to/wordpress/install/ --set-user=wpcli --config=project
         *     Success: Added '@prod' alias.
         *
         *     # Add group of aliases.
         *     $ wp cli alias add @multiservers --grouping=servera,serverb
         *     Success: Added '@multiservers' alias.
         */
        public function add($args, $assoc_args)
        {
        }
        /**
         * Deletes an alias.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the alias.
         *
         * [--config=<config>]
         * : Config file to be considered for operations.
         * ---
         * options:
         *   - global
         *   - project
         * ---
         *
         * ## EXAMPLES
         *
         *     # Delete alias.
         *     $ wp cli alias delete @prod
         *     Success: Deleted '@prod' alias.
         *
         *     # Delete project alias.
         *     $ wp cli alias delete @prod --config=project
         *     Success: Deleted '@prod' alias.
         */
        public function delete($args, $assoc_args)
        {
        }
        /**
         * Updates an alias.
         *
         * ## OPTIONS
         *
         * <key>
         * : Key for the alias.
         *
         * [--set-user=<user>]
         * : Set user for alias.
         *
         * [--set-url=<url>]
         * : Set url for alias.
         *
         * [--set-path=<path>]
         * : Set path for alias.
         *
         * [--set-ssh=<ssh>]
         * : Set ssh for alias.
         *
         * [--set-http=<http>]
         * : Set http for alias.
         *
         * [--grouping=<grouping>]
         * : For grouping multiple aliases.
         *
         * [--config=<config>]
         * : Config file to be considered for operations.
         * ---
         * options:
         *   - global
         *   - project
         * ---
         *
         * ## EXAMPLES
         *
         *     # Update alias.
         *     $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/
         *     Success: Updated 'prod' alias.
         *
         *     # Update project alias.
         *     $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/ --config=project
         *     Success: Updated 'prod' alias.
         */
        public function update($args, $assoc_args)
        {
        }
        /**
         * Get config path and aliases data based on config type.
         *
         * @param string $config             Type of config to get data from.
         * @param string $alias              Alias to be used for Add/Update/Delete.
         * @param bool   $create_config_file Optional. If a config file doesn't exist,
         *                                   should it be created? Defaults to false.
         *
         * @return array Config Path and Aliases in it.
         * @throws \WP_CLI\ExitException
         */
        private function get_aliases_data($config, $alias, $create_config_file = \false)
        {
        }
        /**
         * Check if the config file exists and is writable.
         *
         * @param string $config_path Path to config file.
         *
         * @return void
         */
        private function validate_config_file($config_path)
        {
        }
        /**
         * Return aliases array.
         *
         * @param array  $aliases     Current aliases data.
         * @param string $alias       Name of alias.
         * @param array  $key_args    Associative arguments.
         * @param bool   $is_grouping Check if its a grouping operation.
         * @param string $grouping    Grouping value.
         * @param bool   $is_update   Is this an update operation?
         *
         * @return mixed
         */
        private function build_aliases($aliases, $alias, $assoc_args, $is_grouping, $grouping = '', $is_update = \false)
        {
        }
        /**
         * Validate input of passed arguments.
         *
         * @param array  $assoc_args Arguments array.
         * @param string $grouping   Grouping argument value.
         *
         * @throws WP_CLI\ExitException
         */
        private function validate_input($assoc_args, $grouping)
        {
        }
        /**
         * Validate alias type before update.
         *
         * @param array  $aliases    Existing aliases data.
         * @param string $alias      Alias Name.
         * @param array  $assoc_args Arguments array.
         * @param string $grouping   Grouping argument value.
         *
         * @throws WP_CLI\ExitException
         */
        private function validate_alias_type($aliases, $alias, $assoc_args, $grouping)
        {
        }
        /**
         * Save aliases data to config file.
         *
         * @param array  $aliases     Current aliases data.
         * @param string $alias       Name of alias.
         * @param string $config_path Path to config file.
         * @param string $operation   Current operation string fro message.
         */
        private function process_aliases($aliases, $alias, $config_path, $operation = '')
        {
        }
    }
    /**
     * Manages the internal WP-CLI cache,.
     *
     * ## EXAMPLES
     *
     *     # Remove all cached files.
     *     $ wp cli cache clear
     *     Success: Cache cleared.
     *
     *     # Remove all cached files except for the newest version of each one.
     *     $ wp cli cache prune
     *     Success: Cache pruned.
     *
     * @when before_wp_load
     */
    class CLI_Cache_Command extends \WP_CLI_Command
    {
        /**
         * Clears the internal cache.
         *
         * ## EXAMPLES
         *
         *     $ wp cli cache clear
         *     Success: Cache cleared.
         *
         * @subcommand clear
         */
        public function cache_clear()
        {
        }
        /**
         * Prunes the internal cache.
         *
         * Removes all cached files except for the newest version of each one.
         *
         * ## EXAMPLES
         *
         *     $ wp cli cache prune
         *     Success: Cache pruned.
         *
         * @subcommand prune
         */
        public function cache_prune()
        {
        }
    }
    /**
     * Reviews current WP-CLI info, checks for updates, or views defined aliases.
     *
     * ## EXAMPLES
     *
     *     # Display the version currently installed.
     *     $ wp cli version
     *     WP-CLI 0.24.1
     *
     *     # Check for updates to WP-CLI.
     *     $ wp cli check-update
     *     Success: WP-CLI is at the latest version.
     *
     *     # Update WP-CLI to the latest stable release.
     *     $ wp cli update
     *     You have version 0.24.0. Would you like to update to 0.24.1? [y/n] y
     *     Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar...
     *     New version works. Proceeding to replace.
     *     Success: Updated WP-CLI to 0.24.1.
     *
     *     # Clear the internal WP-CLI cache.
     *     $ wp cli cache clear
     *     Success: Cache cleared.
     *
     * @when before_wp_load
     */
    class CLI_Command extends \WP_CLI_Command
    {
        private function command_to_array($command)
        {
        }
        /**
         * Prints WP-CLI version.
         *
         * ## EXAMPLES
         *
         *     # Display CLI version.
         *     $ wp cli version
         *     WP-CLI 0.24.1
         */
        public function version()
        {
        }
        /**
         * Prints various details about the WP-CLI environment.
         *
         * Helpful for diagnostic purposes, this command shares:
         *
         * * OS information.
         * * Shell information.
         * * PHP binary used.
         * * PHP binary version.
         * * php.ini configuration file used (which is typically different than web).
         * * WP-CLI root dir: where WP-CLI is installed (if non-Phar install).
         * * WP-CLI global config: where the global config YAML file is located.
         * * WP-CLI project config: where the project config YAML file is located.
         * * WP-CLI version: currently installed version.
         *
         * See [config docs](https://wp-cli.org/config/) for more details on global
         * and project config YAML files.
         *
         * ## OPTIONS
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: list
         * options:
         *   - list
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Display various data about the CLI environment.
         *     $ wp cli info
         *     OS:  Linux 4.10.0-42-generic #46~16.04.1-Ubuntu SMP Mon Dec 4 15:57:59 UTC 2017 x86_64
         *     Shell:   /usr/bin/zsh
         *     PHP binary:  /usr/bin/php
         *     PHP version: 7.1.12-1+ubuntu16.04.1+deb.sury.org+1
         *     php.ini used:    /etc/php/7.1/cli/php.ini
         *     WP-CLI root dir:    phar://wp-cli.phar
         *     WP-CLI packages dir:    /home/person/.wp-cli/packages/
         *     WP-CLI global config:
         *     WP-CLI project config:
         *     WP-CLI version: 1.5.0
         */
        public function info($_, $assoc_args)
        {
        }
        /**
         * Checks to see if there is a newer version of WP-CLI available.
         *
         * Queries the Github releases API. Returns available versions if there are
         * updates available, or success message if using the latest release.
         *
         * ## OPTIONS
         *
         * [--patch]
         * : Only list patch updates.
         *
         * [--minor]
         * : Only list minor updates.
         *
         * [--major]
         * : Only list major updates.
         *
         * [--field=<field>]
         * : Prints the value of a single field for each update.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object fields. Defaults to version,update_type,package_url.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     # Check for update.
         *     $ wp cli check-update
         *     Success: WP-CLI is at the latest version.
         *
         *     # Check for update and new version is available.
         *     $ wp cli check-update
         *     +---------+-------------+-------------------------------------------------------------------------------+
         *     | version | update_type | package_url                                                                   |
         *     +---------+-------------+-------------------------------------------------------------------------------+
         *     | 0.24.1  | patch       | https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar |
         *     +---------+-------------+-------------------------------------------------------------------------------+
         *
         * @subcommand check-update
         */
        public function check_update($_, $assoc_args)
        {
        }
        /**
         * Updates WP-CLI to the latest release.
         *
         * Default behavior is to check the releases API for the newest stable
         * version, and prompt if one is available.
         *
         * Use `--stable` to install or reinstall the latest stable version.
         *
         * Use `--nightly` to install the latest built version of the master branch.
         * While not recommended for production, nightly contains the latest and
         * greatest, and should be stable enough for development and staging
         * environments.
         *
         * Only works for the Phar installation mechanism.
         *
         * ## OPTIONS
         *
         * [--patch]
         * : Only perform patch updates.
         *
         * [--minor]
         * : Only perform minor updates.
         *
         * [--major]
         * : Only perform major updates.
         *
         * [--stable]
         * : Update to the latest stable release. Skips update check.
         *
         * [--nightly]
         * : Update to the latest built version of the master branch. Potentially unstable.
         *
         * [--yes]
         * : Do not prompt for confirmation.
         *
         * ## EXAMPLES
         *
         *     # Update CLI.
         *     $ wp cli update
         *     You have version 0.24.0. Would you like to update to 0.24.1? [y/n] y
         *     Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar...
         *     New version works. Proceeding to replace.
         *     Success: Updated WP-CLI to 0.24.1.
         */
        public function update($_, $assoc_args)
        {
        }
        /**
         * Returns update information.
         */
        private function get_updates($assoc_args)
        {
        }
        /**
         * Dumps the list of global parameters, as JSON or in var_export format.
         *
         * ## OPTIONS
         *
         * [--with-values]
         * : Display current values also.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: json
         * options:
         *   - var_export
         *   - json
         * ---
         *
         * ## EXAMPLES
         *
         *     # Dump the list of global parameters.
         *     $ wp cli param-dump --format=var_export
         *     array (
         *       'path' =>
         *       array (
         *         'runtime' => '=<path>',
         *         'file' => '<path>',
         *         'synopsis' => '',
         *         'default' => NULL,
         *         'multiple' => false,
         *         'desc' => 'Path to the WordPress files.',
         *       ),
         *       'url' =>
         *       array (
         *
         * @subcommand param-dump
         */
        public function param_dump($_, $assoc_args)
        {
        }
        /**
         * Dumps the list of installed commands, as JSON.
         *
         * ## EXAMPLES
         *
         *     # Dump the list of installed commands.
         *     $ wp cli cmd-dump
         *     {"name":"wp","description":"Manage WordPress through the command-line.","longdesc":"\n\n## GLOBAL PARAMETERS\n\n  --path=<path>\n      Path to the WordPress files.\n\n  --ssh=<ssh>\n      Perform operation against a remote server over SSH (or a container using scheme of "docker" or "docker-compose").\n\n  --url=<url>\n      Pretend request came from given URL. In multisite, this argument is how the target site is specified. \n\n  --user=<id|login|email>\n
         *
         * @subcommand cmd-dump
         */
        public function cmd_dump()
        {
        }
        /**
         * Generates tab completion strings.
         *
         * ## OPTIONS
         *
         * --line=<line>
         * : The current command line to be executed.
         *
         * --point=<point>
         * : The index to the current cursor position relative to the beginning of the command.
         *
         * ## EXAMPLES
         *
         *     # Generate tab completion strings.
         *     $ wp cli completions --line='wp eva' --point=100
         *     eval
         *     eval-file
         */
        public function completions($_, $assoc_args)
        {
        }
        /**
         * Get a string representing the type of update being checked for.
         */
        private function get_update_type_str($assoc_args)
        {
        }
        /**
         * Detects if a command exists
         *
         * This commands checks if a command is registered with WP-CLI.
         * If the command is found then it returns with exit status 0.
         * If the command doesn't exist, then it will exit with status 1.
         *
         * ## OPTIONS
         * <command_name>...
         * : The command
         *
         * ## EXAMPLES
         *
         *     # The "site delete" command is registered.
         *     $ wp cli has-command "site delete"
         *     $ echo $?
         *     0
         *
         *     # The "foo bar" command is not registered.
         *     $ wp cli has-command "foo bar"
         *     $ echo $?
         *     1
         *
         * @subcommand has-command
         *
         * @when after_wp_load
         */
        public function has_command($_, $assoc_args)
        {
        }
    }
    class Help_Command extends \WP_CLI_Command
    {
        /**
         * Gets help on WP-CLI, or on a specific command.
         *
         * ## OPTIONS
         *
         * [<command>...]
         * : Get help on a specific command.
         *
         * ## EXAMPLES
         *
         *     # get help for `core` command
         *     wp help core
         *
         *     # get help for `core download` subcommand
         *     wp help core download
         */
        public function __invoke($args, $assoc_args)
        {
        }
        private static function show_help($command)
        {
        }
        private static function rewrap_param_desc($matches)
        {
        }
        private static function indent($whitespace, $text)
        {
        }
        private static function pass_through_pager($out)
        {
        }
        private static function get_initial_markdown($command)
        {
        }
        private static function render_subcommands($command)
        {
        }
        private static function get_max_len($strings)
        {
        }
        /**
         * Parse reference links from longdescription.
         *
         * @param  string $longdesc The longdescription from the `$command->get_longdesc()`.
         * @return string The longdescription which has links as footnote.
         */
        private static function parse_reference_links($longdesc)
        {
        }
    }
    class Contrib_List_Command
    {
        /**
         * List all contributors to this release.
         *
         * Run within the main WP-CLI project repository.
         *
         * ## OPTIONS
         *
         * [--format=<format>]
         * : Render output in a specific format.
         * ---
         * default: markdown
         * options:
         *   - markdown
         *   - html
         * ---
         *
         * @when before_wp_load
         */
        public function __invoke($_, $assoc_args)
        {
        }
        /**
         * Get the milestones for a given project
         *
         * @param string $project
         * @return array
         */
        private static function get_project_milestones($project, $args = array())
        {
        }
        /**
         * Get the pull requests assigned to a milestone of a given project
         *
         * @param string $project
         * @param integer $milestone_id
         * @return array
         */
        private static function get_project_milestone_pull_requests($project, $milestone_id)
        {
        }
        /**
         * Parse the contributors from pull request objects
         *
         * @param array $pull_requests
         * @return array
         */
        private static function parse_contributors_from_pull_requests($pull_requests)
        {
        }
        /**
         * Make a request to the GitHub API
         *
         * @param string $url
         * @param string $args
         * @return array
         */
        private static function make_github_api_request($url, $args = array())
        {
        }
    }
    /**
     * Transforms a wp-config.php file.
     */
    class WPConfigTransformer
    {
        /**
         * Append to end of file
         */
        const ANCHOR_EOF = 'EOF';
        /**
         * Path to the wp-config.php file.
         *
         * @var string
         */
        protected $wp_config_path;
        /**
         * Original source of the wp-config.php file.
         *
         * @var string
         */
        protected $wp_config_src;
        /**
         * Array of parsed configs.
         *
         * @var array
         */
        protected $wp_configs = array();
        /**
         * Instantiates the class with a valid wp-config.php.
         *
         * @throws Exception If the wp-config.php file is missing.
         * @throws Exception If the wp-config.php file is not writable.
         *
         * @param string $wp_config_path Path to a wp-config.php file.
         */
        public function __construct($wp_config_path)
        {
        }
        /**
         * Checks if a config exists in the wp-config.php file.
         *
         * @throws Exception If the wp-config.php file is empty.
         * @throws Exception If the requested config type is invalid.
         *
         * @param string $type Config type (constant or variable).
         * @param string $name Config name.
         *
         * @return bool
         */
        public function exists($type, $name)
        {
        }
        /**
         * Get the value of a config in the wp-config.php file.
         *
         * @throws Exception If the wp-config.php file is empty.
         * @throws Exception If the requested config type is invalid.
         *
         * @param string $type Config type (constant or variable).
         * @param string $name Config name.
         *
         * @return array
         */
        public function get_value($type, $name)
        {
        }
        /**
         * Adds a config to the wp-config.php file.
         *
         * @throws Exception If the config value provided is not a string.
         * @throws Exception If the config placement anchor could not be located.
         *
         * @param string $type    Config type (constant or variable).
         * @param string $name    Config name.
         * @param string $value   Config value.
         * @param array  $options (optional) Array of special behavior options.
         *
         * @return bool
         */
        public function add($type, $name, $value, array $options = array())
        {
        }
        /**
         * Updates an existing config in the wp-config.php file.
         *
         * @throws Exception If the config value provided is not a string.
         *
         * @param string $type    Config type (constant or variable).
         * @param string $name    Config name.
         * @param string $value   Config value.
         * @param array  $options (optional) Array of special behavior options.
         *
         * @return bool
         */
        public function update($type, $name, $value, array $options = array())
        {
        }
        /**
         * Removes a config from the wp-config.php file.
         *
         * @param string $type Config type (constant or variable).
         * @param string $name Config name.
         *
         * @return bool
         */
        public function remove($type, $name)
        {
        }
        /**
         * Applies formatting to a config value.
         *
         * @throws Exception When a raw value is requested for an empty string.
         *
         * @param string $value Config value.
         * @param bool   $raw   Display value in raw format without quotes.
         *
         * @return mixed
         */
        protected function format_value($value, $raw)
        {
        }
        /**
         * Normalizes the source output for a name/value pair.
         *
         * @throws Exception If the requested config type does not support normalization.
         *
         * @param string $type  Config type (constant or variable).
         * @param string $name  Config name.
         * @param mixed  $value Config value.
         *
         * @return string
         */
        protected function normalize($type, $name, $value)
        {
        }
        /**
         * Parses the source of a wp-config.php file.
         *
         * @param string $src Config file source.
         *
         * @return array
         */
        protected function parse_wp_config($src)
        {
        }
        /**
         * Saves new contents to the wp-config.php file.
         *
         * @throws Exception If the config file content provided is empty.
         * @throws Exception If there is a failure when saving the wp-config.php file.
         *
         * @param string $contents New config contents.
         *
         * @return bool
         */
        protected function save($contents)
        {
        }
    }
}
/**
 * PHP Command Line Tools
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 *
 * @author    James Logsdon <dwarf@girsbrain.org>
 * @copyright 2010 James Logsdom (http://girsbrain.org)
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 */
namespace cli {
    /**
     * Handles rendering strings. If extra scalar arguments are given after the `$msg`
     * the string will be rendered with `sprintf`. If the second argument is an `array`
     * then each key in the array will be the placeholder name. Placeholders are of the
     * format {:key}.
     *
     * @param string   $msg  The message to render.
     * @param mixed    ...   Either scalar arguments or a single array argument.
     * @return string  The rendered string.
     */
    function render($msg)
    {
    }
    /**
     * Shortcut for printing to `STDOUT`. The message and parameters are passed
     * through `sprintf` before output.
     *
     * @param string  $msg  The message to output in `printf` format.
     * @param mixed   ...   Either scalar arguments or a single array argument.
     * @return void
     * @see \cli\render()
     */
    function out($msg)
    {
    }
    /**
     * Pads `$msg` to the width of the shell before passing to `cli\out`.
     *
     * @param string  $msg  The message to pad and pass on.
     * @param mixed   ...   Either scalar arguments or a single array argument.
     * @return void
     * @see cli\out()
     */
    function out_padded($msg)
    {
    }
    /**
     * Prints a message to `STDOUT` with a newline appended. See `\cli\out` for
     * more documentation.
     *
     * @see cli\out()
     */
    function line($msg = '')
    {
    }
    /**
     * Shortcut for printing to `STDERR`. The message and parameters are passed
     * through `sprintf` before output.
     *
     * @param string  $msg  The message to output in `printf` format. With no string,
     *                      a newline is printed.
     * @param mixed   ...   Either scalar arguments or a single array argument.
     * @return void
     */
    function err($msg = '')
    {
    }
    /**
     * Takes input from `STDIN` in the given format. If an end of transmission
     * character is sent (^D), an exception is thrown.
     *
     * @param string  $format  A valid input format. See `fscanf` for documentation.
     *                         If none is given, all input up to the first newline
     *                         is accepted.
     * @return string  The input with whitespace trimmed.
     * @throws \Exception  Thrown if ctrl-D (EOT) is sent as input.
     */
    function input($format = null)
    {
    }
    /**
     * Displays an input prompt. If no default value is provided the prompt will
     * continue displaying until input is received.
     *
     * @param string  $question The question to ask the user.
     * @param string  $default  A default value if the user provides no input.
     * @param string  $marker   A string to append to the question and default value on display.
     * @param boolean $hide     If the user input should be hidden
     * @return string  The users input.
     * @see cli\input()
     */
    function prompt($question, $default = false, $marker = ': ', $hide = false)
    {
    }
    /**
     * Presents a user with a multiple choice question, useful for 'yes/no' type
     * questions (which this function defaults too).
     *
     * @param string      $question   The question to ask the user.
     * @param string      $choice
     * @param string|null $default    The default choice. NULL if a default is not allowed.
     * @internal param string $valid  A string of characters allowed as a response. Case
     *                                is ignored.
     * @return string  The users choice.
     * @see      cli\prompt()
     */
    function choose($question, $choice = 'yn', $default = 'n')
    {
    }
    /**
     * Does the same as {@see choose()}, but always asks yes/no and returns a boolean
     *
     * @param string    $question  The question to ask the user.
     * @param bool|null $default   The default choice, in a boolean format.
     * @return bool
     */
    function confirm($question, $default = false)
    {
    }
    /**
     * Displays an array of strings as a menu where a user can enter a number to
     * choose an option. The array must be a single dimension with either strings
     * or objects with a `__toString()` method.
     *
     * @param array  $items   The list of items the user can choose from.
     * @param string $default The index of the default item.
     * @param string $title   The message displayed to the user when prompted.
     * @return string  The index of the chosen item.
     * @see cli\line()
     * @see cli\input()
     * @see cli\err()
     */
    function menu($items, $default = null, $title = 'Choose an item')
    {
    }
    /**
     * Attempts an encoding-safe way of getting string length. If intl extension or PCRE with '\X' or mb_string extension aren't
     * available, falls back to basic strlen.
     *
     * @param  string      $str      The string to check.
     * @param  string|bool $encoding Optional. The encoding of the string. Default false.
     * @return int  Numeric value that represents the string's length
     */
    function safe_strlen($str, $encoding = false)
    {
    }
    /**
     * Attempts an encoding-safe way of getting a substring. If intl extension or PCRE with '\X' or mb_string extension aren't
     * available, falls back to substr().
     * 		
     * @param  string        $str      The input string.
     * @param  int           $start    The starting position of the substring.
     * @param  int|bool|null $length   Optional, unless $is_width is set. Maximum length of the substring. Default false. Negative not supported.
     * @param  int|bool      $is_width Optional. If set and encoding is UTF-8, $length (which must be specified) is interpreted as spacing width. Default false.
     * @param  string|bool   $encoding Optional. The encoding of the string. Default false.
     * @return bool|string  False if given unsupported args, otherwise substring of string specified by start and length parameters
     */
    function safe_substr($str, $start, $length = false, $is_width = false, $encoding = false)
    {
    }
    /**
     * Internal function used by `safe_substr()` to adjust for East Asian double-width chars.
     *
     * @return string
     */
    function _safe_substr_eaw($str, $length)
    {
    }
    /**
     * An encoding-safe way of padding string length for display
     *
     * @param  string      $string   The string to pad.
     * @param  int         $length   The length to pad it to.
     * @param  string|bool $encoding Optional. The encoding of the string. Default false.
     * @return string
     */
    function safe_str_pad($string, $length, $encoding = false)
    {
    }
    /**
     * Get width of string, ie length in characters, taking into account multi-byte and mark characters for UTF-8, and multi-byte for non-UTF-8.
     *
     * @param  string      $string   The string to check.
     * @param  string|bool $encoding Optional. The encoding of the string. Default false.
     * @return int  The string's width.
     */
    function strwidth($string, $encoding = false)
    {
    }
    /**
     * Returns whether ICU is modern enough not to flake out.
     *
     * @return bool
     */
    function can_use_icu()
    {
    }
    /**
     * Returns whether PCRE Unicode extended grapheme cluster '\X' is available for use.
     *
     * @return bool
     */
    function can_use_pcre_x()
    {
    }
    /**
     * Get the regexs generated from Unicode data.
     *
     * @param string $idx Optional. Return a specific regex only. Default null.
     * @return array|string  Returns keyed array if not given $idx or $idx doesn't exist, otherwise the specific regex string.
     */
    function get_unicode_regexs($idx = null)
    {
    }
}
// Used by `wp server` to route requests.
namespace WP_CLI\Router {
    /**
     * This is a copy of WordPress's add_filter() function.
     *
     * We duplicate it because WordPress is not loaded yet.
     */
    function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * This is a copy of WordPress's _wp_filter_build_unique_id() function.
     *
     * We duplicate it because WordPress is not loaded yet.
     */
    function _wp_filter_build_unique_id($tag, $function, $priority)
    {
    }
    function _get_full_host($url)
    {
    }
}
namespace WP_CLI {
    /**
     * Get the list of ordered steps that need to be processed to bootstrap WP-CLI.
     *
     * Each entry is a fully qualified class name for a class implementing the
     * `WP_CLI\Bootstrap\BootstrapStep` interface.
     *
     * @return string[]
     */
    function get_bootstrap_steps()
    {
    }
    /**
     * Register the classes needed for the bootstrap process.
     *
     * The Composer autoloader is not active yet at this point, so we need to use a
     * custom autoloader to fetch the bootstrap classes in a flexible way.
     */
    function prepare_bootstrap()
    {
    }
    /**
     * Initialize and return the bootstrap state to pass from step to step.
     *
     * @return BootstrapState
     */
    function initialize_bootstrap_state()
    {
    }
    /**
     * Process the bootstrapping steps.
     *
     * Loops over each of the provided steps, instantiates it and then calls its
     * `process()` method.
     */
    function bootstrap()
    {
    }
}
namespace WP_CLI\Dispatcher {
    /**
     * Get the path to a command, e.g. "core download"
     *
     * @param Subcommand|CompositeCommand $command
     * @return string[]
     */
    function get_path($command)
    {
    }
}
// Utilities that depend on WordPress code.
namespace WP_CLI\Utils {
    function wp_not_installed()
    {
    }
    // phpcs:disable WordPress.PHP.IniSet -- Intentional & correct usage.
    function wp_debug_mode()
    {
    }
    // phpcs:enable
    function replace_wp_die_handler()
    {
    }
    function wp_die_handler($message)
    {
    }
    /**
     * Clean HTML error message so suitable for text display.
     */
    function wp_clean_error_message($message)
    {
    }
    function wp_redirect_handler($url)
    {
    }
    function maybe_require($since, $path)
    {
    }
    function get_upgrader($class)
    {
    }
    /**
     * Converts a plugin basename back into a friendly slug.
     */
    function get_plugin_name($basename)
    {
    }
    function is_plugin_skipped($file)
    {
    }
    function get_theme_name($path)
    {
    }
    function is_theme_skipped($path)
    {
    }
    /**
     * Register the sidebar for unused widgets.
     * Core does this in /wp-admin/widgets.php, which isn't helpful.
     */
    function wp_register_unused_sidebar()
    {
    }
    /**
     * Attempts to determine which object cache is being used.
     *
     * Note that the guesses made by this function are based on the WP_Object_Cache classes
     * that define the 3rd party object cache extension. Changes to those classes could render
     * problems with this function's ability to determine which object cache is being used.
     *
     * @return string
     */
    function wp_get_cache_type()
    {
    }
    /**
     * Clear WordPress internal object caches.
     *
     * In long-running scripts, the internal caches on `$wp_object_cache` and `$wpdb`
     * can grow to consume gigabytes of memory. Periodically calling this utility
     * can help with memory management.
     *
     * @access public
     * @category System
     * @deprecated 1.5.0
     */
    function wp_clear_object_cache()
    {
    }
    /**
     * Get a set of tables in the database.
     *
     * Interprets common command-line options into a resolved set of table names.
     *
     * @param array $args Provided table names, or tables with wildcards.
     * @param array $assoc_args Optional flags for groups of tables (e.g. --network)
     * @return array $tables
     */
    function wp_get_table_names($args, $assoc_args = array())
    {
    }
    /**
     * Failsafe use of the WordPress wp_strip_all_tags() function.
     *
     * Automatically falls back to strip_tags() function if the WP function is not
     * available.
     *
     * @param string $string String to strip the tags from.
     * @return string String devoid of tags.
     */
    function strip_tags($string)
    {
    }
}
// Utilities that do NOT depend on WordPress code.
namespace WP_CLI\Utils {
    function inside_phar()
    {
    }
    // Files that need to be read by external programs have to be extracted from the Phar archive.
    function extract_from_phar($path)
    {
    }
    function load_dependencies()
    {
    }
    function get_vendor_paths()
    {
    }
    // Using require() directly inside a class grants access to private methods to the loaded code.
    function load_file($path)
    {
    }
    function load_command($name)
    {
    }
    /**
     * Like array_map(), except it returns a new iterator, instead of a modified array.
     *
     * Example:
     *
     *     $arr = array('Football', 'Socker');
     *
     *     $it = iterator_map($arr, 'strtolower', function($val) {
     *       return str_replace('foo', 'bar', $val);
     *     });
     *
     *     foreach ( $it as $val ) {
     *       var_dump($val);
     *     }
     *
     * @param array|object $it Either a plain array or another iterator.
     * @param callback     $fn The function to apply to an element.
     * @return object An iterator that applies the given callback(s).
     */
    function iterator_map($it, $fn)
    {
    }
    /**
     * Search for file by walking up the directory tree until the first file is found or until $stop_check($dir) returns true.
     *
     * @param string|array $files      The files (or file) to search for.
     * @param string|null  $dir        The directory to start searching from; defaults to CWD.
     * @param callable     $stop_check Function which is passed the current dir each time a directory level is traversed.
     * @return null|string Null if the file was not found.
     */
    function find_file_upward($files, $dir = null, $stop_check = null)
    {
    }
    function is_path_absolute($path)
    {
    }
    /**
     * Composes positional arguments into a command string.
     *
     * @param array $args Positional arguments to compose.
     * @return string
     */
    function args_to_str($args)
    {
    }
    /**
     * Composes associative arguments into a command string.
     *
     * @param array $assoc_args Associative arguments to compose.
     * @return string
     */
    function assoc_args_to_str($assoc_args)
    {
    }
    /**
     * Given a template string and an arbitrary number of arguments,
     * returns the final command, with the parameters escaped.
     */
    function esc_cmd($cmd)
    {
    }
    /**
     * Gets path to WordPress configuration.
     *
     * @return string
     */
    function locate_wp_config()
    {
    }
    function wp_version_compare($since, $operator)
    {
    }
    /**
     * Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.
     *
     * Given a collection of items with a consistent data structure:
     *
     * ```
     * $items = array(
     *     array(
     *         'key'   => 'foo',
     *         'value'  => 'bar',
     *     )
     * );
     * ```
     *
     * Render `$items` as an ASCII table:
     *
     * ```
     * WP_CLI\Utils\format_items( 'table', $items, array( 'key', 'value' ) );
     *
     * # +-----+-------+
     * # | key | value |
     * # +-----+-------+
     * # | foo | bar   |
     * # +-----+-------+
     * ```
     *
     * Or render `$items` as YAML:
     *
     * ```
     * WP_CLI\Utils\format_items( 'yaml', $items, array( 'key', 'value' ) );
     *
     * # ---
     * # -
     * #   key: foo
     * #   value: bar
     * ```
     *
     * @access public
     * @category Output
     *
     * @param string       $format Format to use: 'table', 'json', 'csv', 'yaml', 'ids', 'count'.
     * @param array        $items  An array of items to output.
     * @param array|string $fields Named fields for each item of data. Can be array or comma-separated list.
     * @return null
     */
    function format_items($format, $items, $fields)
    {
    }
    /**
     * Write data as CSV to a given file.
     *
     * @access public
     *
     * @param resource $fd      File descriptor.
     * @param array    $rows    Array of rows to output.
     * @param array    $headers List of CSV columns (optional).
     */
    function write_csv($fd, $rows, $headers = array())
    {
    }
    /**
     * Pick fields from an associative array or object.
     *
     * @param  array|object $item    Associative array or object to pick fields from.
     * @param  array        $fields  List of fields to pick.
     * @return array
     */
    function pick_fields($item, $fields)
    {
    }
    /**
     * Launch system's $EDITOR for the user to edit some text.
     *
     * @access public
     * @category Input
     *
     * @param string $input Some form of text to edit (e.g. post content).
     * @param string $title Title to display in the editor.
     * @param string $ext   Extension to use with the temp file.
     * @return string|bool  Edited text, if file is saved from editor; false, if no change to file.
     */
    function launch_editor_for_input($input, $title = 'WP-CLI', $ext = 'tmp')
    {
    }
    /**
     * @param string MySQL host string, as defined in wp-config.php.
     *
     * @return array
     */
    function mysql_host_to_cli_args($raw_host)
    {
    }
    /**
     * Run a MySQL command and optionally return the output.
     *
     * @since v2.5.0 Deprecated $descriptors argument.
     *
     * @param string $cmd           Command to run.
     * @param array  $assoc_args    Associative array of arguments to use.
     * @param mixed  $_             Deprecated. Former $descriptors argument.
     * @param bool   $send_to_shell Optional. Whether to send STDOUT and STDERR
     *                              immediately to the shell. Defaults to true.
     *
     * @return array {
     *     Associative array containing STDOUT and STDERR output.
     *
     *     @type string $stdout    Output that was sent to STDOUT.
     *     @type string $stderr    Output that was sent to STDERR.
     *     @type int    $exit_code Exit code of the process.
     * }
     */
    function run_mysql_command($cmd, $assoc_args, $_ = null, $send_to_shell = true)
    {
    }
    /**
     * Render PHP or other types of files using Mustache templates.
     *
     * IMPORTANT: Automatic HTML escaping is disabled!
     */
    function mustache_render($template_name, $data = array())
    {
    }
    /**
     * Create a progress bar to display percent completion of a given operation.
     *
     * Progress bar is written to STDOUT, and disabled when command is piped. Progress
     * advances with `$progress->tick()`, and completes with `$progress->finish()`.
     * Process bar also indicates elapsed time and expected total time.
     *
     * ```
     * # `wp user generate` ticks progress bar each time a new user is created.
     * #
     * # $ wp user generate --count=500
     * # Generating users  22 % [=======>                             ] 0:05 / 0:23
     *
     * $progress = \WP_CLI\Utils\make_progress_bar( 'Generating users', $count );
     * for ( $i = 0; $i < $count; $i++ ) {
     *     // uses wp_insert_user() to insert the user
     *     $progress->tick();
     * }
     * $progress->finish();
     * ```
     *
     * @access public
     * @category Output
     *
     * @param string  $message  Text to display before the progress bar.
     * @param integer $count    Total number of ticks to be performed.
     * @param int     $interval Optional. The interval in milliseconds between updates. Default 100.
     * @return cli\progress\Bar|WP_CLI\NoOp
     */
    function make_progress_bar($message, $count, $interval = 100)
    {
    }
    /**
     * Helper function to use wp_parse_url when available or fall back to PHP's
     * parse_url if not.
     *
     * Additionally, this adds 'http://' to the URL if no scheme was found.
     *
     * @param string $url             The URL to parse.
     * @param int    $component       Optional. The specific component to retrieve.
     *                                Use one of the PHP predefined constants to
     *                                specify which one. Defaults to -1 (= return
     *                                all parts as an array).
     * @param bool   $auto_add_scheme Optional. Automatically add an http:// scheme if
     *                                none was found. Defaults to true.
     * @return mixed False on parse failure; Array of URL components on success;
     *               When a specific component has been requested: null if the
     *               component doesn't exist in the given URL; a string or - in the
     *               case of PHP_URL_PORT - integer when it does. See parse_url()'s
     *               return values.
     */
    function parse_url($url, $component = -1, $auto_add_scheme = true)
    {
    }
    /**
     * Check if we're running in a Windows environment (cmd.exe).
     *
     * @return bool
     */
    function is_windows()
    {
    }
    /**
     * Replace magic constants in some PHP source code.
     *
     * Replaces the __FILE__ and __DIR__ magic constants with the values they are
     * supposed to represent at runtime.
     *
     * @param string $source The PHP code to manipulate.
     * @param string $path The path to use instead of the magic constants.
     * @return string Adapted PHP code.
     */
    function replace_path_consts($source, $path)
    {
    }
    /**
     * Make a HTTP request to a remote URL.
     *
     * Wraps the Requests HTTP library to ensure every request includes a cert.
     *
     * ```
     * # `wp core download` verifies the hash for a downloaded WordPress archive
     *
     * $md5_response = Utils\http_request( 'GET', $download_url . '.md5' );
     * if ( 20 != substr( $md5_response->status_code, 0, 2 ) ) {
     *      WP_CLI::error( "Couldn't access md5 hash for release (HTTP code {$response->status_code})" );
     * }
     * ```
     *
     * @access public
     *
     * @param string $method  HTTP method (GET, POST, DELETE, etc.).
     * @param string $url     URL to make the HTTP request to.
     * @param array  $headers Add specific headers to the request.
     * @param array $options
     * @return object
     * @throws RuntimeException If the request failed.
     * @throws WP_CLI\ExitException If the request failed and $halt_on_error is true.
     */
    function http_request($method, $url, $data = null, $headers = array(), $options = array())
    {
    }
    /**
     * Increments a version string using the "x.y.z-pre" format.
     *
     * Can increment the major, minor or patch number by one.
     * If $new_version == "same" the version string is not changed.
     * If $new_version is not a known keyword, it will be used as the new version string directly.
     *
     * @param string $current_version
     * @param string $new_version
     * @return string
     */
    function increment_version($current_version, $new_version)
    {
    }
    /**
     * Compare two version strings to get the named semantic version.
     *
     * @access public
     *
     * @param string $new_version
     * @param string $original_version
     * @return string $name 'major', 'minor', 'patch'
     */
    function get_named_sem_ver($new_version, $original_version)
    {
    }
    /**
     * Return the flag value or, if it's not set, the $default value.
     *
     * Because flags can be negated (e.g. --no-quiet to negate --quiet), this
     * function provides a safer alternative to using
     * `isset( $assoc_args['quiet'] )` or similar.
     *
     * @access public
     * @category Input
     *
     * @param array  $assoc_args Arguments array.
     * @param string $flag       Flag to get the value.
     * @param mixed  $default    Default value for the flag. Default: NULL.
     * @return mixed
     */
    function get_flag_value($assoc_args, $flag, $default = null)
    {
    }
    /**
     * Get the home directory.
     *
     * @access public
     * @category System
     *
     * @return string
     */
    function get_home_dir()
    {
    }
    /**
     * Appends a trailing slash.
     *
     * @access public
     * @category System
     *
     * @param string $string What to add the trailing slash to.
     * @return string String with trailing slash added.
     */
    function trailingslashit($string)
    {
    }
    /**
     * Normalize a filesystem path.
     *
     * On Windows systems, replaces backslashes with forward slashes
     * and forces upper-case drive letters.
     * Allows for two leading slashes for Windows network shares, but
     * ensures that all other duplicate slashes are reduced to a single one.
     * Ensures upper-case drive letters on Windows systems.
     *
     * @access public
     * @category System
     *
     * @param string $path Path to normalize.
     * @return string Normalized path.
     */
    function normalize_path($path)
    {
    }
    /**
     * Convert Windows EOLs to *nix.
     *
     * @param string $str String to convert.
     * @return string String with carriage return / newline pairs reduced to newlines.
     */
    function normalize_eols($str)
    {
    }
    /**
     * Get the system's temp directory. Warns user if it isn't writable.
     *
     * @access public
     * @category System
     *
     * @return string
     */
    function get_temp_dir()
    {
    }
    /**
     * Parse a SSH url for its host, port, and path.
     *
     * Similar to parse_url(), but adds support for defined SSH aliases.
     *
     * ```
     * host OR host/path/to/wordpress OR host:port/path/to/wordpress
     * ```
     *
     * @access public
     *
     * @return mixed
     */
    function parse_ssh_url($url, $component = -1)
    {
    }
    /**
     * Report the results of the same operation against multiple resources.
     *
     * @access public
     * @category Input
     *
     * @param string       $noun      Resource being affected (e.g. plugin).
     * @param string       $verb      Type of action happening to the noun (e.g. activate).
     * @param integer      $total     Total number of resource being affected.
     * @param integer      $successes Number of successful operations.
     * @param integer      $failures  Number of failures.
     * @param null|integer $skips     Optional. Number of skipped operations. Default null (don't show skips).
     */
    function report_batch_operation_results($noun, $verb, $total, $successes, $failures, $skips = null)
    {
    }
    /**
     * Parse a string of command line arguments into an $argv-esqe variable.
     *
     * @access public
     * @category Input
     *
     * @param string $arguments
     * @return array
     */
    function parse_str_to_argv($arguments)
    {
    }
    /**
     * Locale-independent version of basename()
     *
     * @access public
     *
     * @param string $path
     * @param string $suffix
     * @return string
     */
    function basename($path, $suffix = '')
    {
    }
    /**
     * Checks whether the output of the current script is a TTY or a pipe / redirect
     *
     * Returns true if STDOUT output is being redirected to a pipe or a file; false is
     * output is being sent directly to the terminal.
     *
     * If an env variable SHELL_PIPE exists, returned result depends on its
     * value. Strings like 1, 0, yes, no, that validate to booleans are accepted.
     *
     * To enable ASCII formatting even when the shell is piped, use the
     * ENV variable SHELL_PIPE=0.
     *
     * @access public
     *
     * @return bool
     */
    function isPiped()
    {
    }
    /**
     * Expand within paths to their matching paths.
     *
     * Has no effect on paths which do not use glob patterns.
     *
     * @param string|array $paths Single path as a string, or an array of paths.
     * @param int          $flags Optional. Flags to pass to glob. Defaults to GLOB_BRACE.
     * @return array Expanded paths.
     */
    function expand_globs($paths, $flags = 'default')
    {
    }
    /**
     * Simulate a `glob()` with the `GLOB_BRACE` flag set. For systems (eg Alpine Linux) built against a libc library (eg https://www.musl-libc.org/) that lacks it.
     * Copied and adapted from Zend Framework's `Glob::fallbackGlob()` and Glob::nextBraceSub()`.
     *
     * Zend Framework (https://framework.zend.com/)
     *
     * @link      https://github.com/zendframework/zf2 for the canonical source repository
     * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (https://www.zend.com)
     * @license   https://framework.zend.com/license/new-bsd New BSD License
     *
     * @param string $pattern     Filename pattern.
     * @param void   $dummy_flags Not used.
     * @return array Array of paths.
     */
    function glob_brace($pattern, $dummy_flags = null)
    {
    }
    /**
     * Get the closest suggestion for a mis-typed target term amongst a list of
     * options.
     *
     * Uses the Levenshtein algorithm to calculate the relative "distance" between
     * terms.
     *
     * If the "distance" to the closest term is higher than the threshold, an empty
     * string is returned.
     *
     * @param string $target    Target term to get a suggestion for.
     * @param array  $options   Array with possible options.
     * @param int    $threshold Threshold above which to return an empty string.
     * @return string
     */
    function get_suggestion($target, array $options, $threshold = 2)
    {
    }
    /**
     * Get a Phar-safe version of a path.
     *
     * For paths inside a Phar, this strips the outer filesystem's location to
     * reduce the path to what it needs to be within the Phar archive.
     *
     * Use the __FILE__ or __DIR__ constants as a starting point.
     *
     * @param string $path An absolute path that might be within a Phar.
     * @return string A Phar-safe version of the path.
     */
    function phar_safe_path($path)
    {
    }
    /**
     * Maybe prefix command string with "/usr/bin/env".
     * Removes (if there) if Windows, adds (if not there) if not.
     *
     * @param string $command
     * @return string
     */
    function force_env_on_nix_systems($command)
    {
    }
    /**
     * Check that `proc_open()` and `proc_close()` haven't been disabled.
     *
     * @param string $context Optional. If set will appear in error message. Default null.
     * @param bool   $return  Optional. If set will return false rather than error out. Default false.
     * @return bool
     */
    function check_proc_available($context = null, $return = false)
    {
    }
    /**
     * Returns past tense of verb, with limited accuracy. Only regular verbs catered for, apart from "reset".
     *
     * @param string $verb Verb to return past tense of.
     * @return string
     */
    function past_tense_verb($verb)
    {
    }
    /**
     * Get the path to the PHP binary used when executing WP-CLI.
     *
     * Environment values permit specific binaries to be indicated.
     *
     * @access public
     * @category System
     *
     * @return string
     */
    function get_php_binary()
    {
    }
    /**
     * Windows compatible `proc_open()`.
     * Works around bug in PHP, and also deals with *nix-like `ENV_VAR=blah cmd` environment variable prefixes.
     *
     * @access public
     *
     * @param string $cmd            Command to execute.
     * @param array  $descriptorspec Indexed array of descriptor numbers and their values.
     * @param array  &$pipes         Indexed array of file pointers that correspond to PHP's end of any pipes that are created.
     * @param string $cwd            Initial working directory for the command.
     * @param array  $env            Array of environment variables.
     * @param array  $other_options  Array of additional options (Windows only).
     * @return resource Command stripped of any environment variable settings.
     */
    function proc_open_compat($cmd, $descriptorspec, &$pipes, $cwd = null, $env = null, $other_options = null)
    {
    }
    /**
     * For use by `proc_open_compat()` only. Separated out for ease of testing. Windows only.
     * Turns *nix-like `ENV_VAR=blah command` environment variable prefixes into stripped `cmd` with prefixed environment variables added to passed in environment array.
     *
     * @access private
     *
     * @param string $cmd Command to execute.
     * @param array &$env Array of existing environment variables. Will be modified if any settings in command.
     * @return string Command stripped of any environment variable settings.
     */
    function _proc_open_compat_win_env($cmd, &$env)
    {
    }
    /**
     * First half of escaping for LIKE special characters % and _ before preparing for MySQL.
     *
     * Use this only before wpdb::prepare() or esc_sql().  Reversing the order is very bad for security.
     *
     * Copied from core "wp-includes/wp-db.php". Avoids dependency on WP 4.4 wpdb.
     *
     * @access public
     *
     * @param string $text The raw text to be escaped. The input typed by the user should have no
     *                     extra or deleted slashes.
     * @return string Text in the form of a LIKE phrase. The output is not SQL safe. Call $wpdb::prepare()
     *                or real_escape next.
     */
    function esc_like($text)
    {
    }
    /**
     * Escapes (backticks) MySQL identifiers (aka schema object names) - i.e. column names, table names, and database/index/alias/view etc names.
     * See https://dev.mysql.com/doc/refman/5.5/en/identifiers.html
     *
     * @param  string|array $idents A single identifier or an array of identifiers.
     * @return string|array An escaped string if given a string, or an array of escaped strings if given an array of strings.
     */
    function esc_sql_ident($idents)
    {
    }
    /**
     * Check whether a given string is a valid JSON representation.
     *
     * @param string $argument       String to evaluate.
     * @param bool   $ignore_scalars Optional. Whether to ignore scalar values.
     *                               Defaults to true.
     * @return bool Whether the provided string is a valid JSON representation.
     */
    function is_json($argument, $ignore_scalars = true)
    {
    }
    /**
     * Parse known shell arrays included in the $assoc_args array.
     *
     * @param array $assoc_args      Associative array of arguments.
     * @param array $array_arguments Array of argument keys that should receive an
     *                               array through the shell.
     * @return array
     */
    function parse_shell_arrays($assoc_args, $array_arguments)
    {
    }
    /**
     * Describe a callable as a string.
     *
     * @param callable $callable The callable to describe.
     * @return string String description of the callable.
     */
    function describe_callable($callable)
    {
    }
    /**
     * Pluralizes a noun in a grammatically correct way.
     *
     * @param string   $noun  Noun to be pluralized. Needs to be in singular form.
     * @param int|null $count Optional. Count of the nouns, to decide whether to
     *                        pluralize. Will pluralize unconditionally if none
     *                        provided.
     * @return string Pluralized noun.
     */
    function pluralize($noun, $count = null)
    {
    }
    /**
     * Get the path to the mysql binary.
     *
     * @return string Path to the mysql binary, or an empty string if not found.
     */
    function get_mysql_binary_path()
    {
    }
    /**
     * Get the version of the MySQL database.
     *
     * @return string Version of the MySQL database, or an empty string if not
     *                found.
     */
    function get_mysql_version()
    {
    }
    /**
     * Get the SQL modes of the MySQL session.
     *
     * @return string[] Array of SQL modes, or an empty array if they couldn't be
     *                  read.
     */
    function get_sql_modes()
    {
    }
}
namespace {
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- Renaming breaks Phar compat.
    function wp_export($args = array())
    {
    }
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound,WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid -- Renaming breaks Phar compat.
    function _wp_export_build_IN_condition($column_name, $values, $format = '%s')
    {
    }
    /**
     * Parses YAML to array.
     * @param string $string YAML string.
     * @return array
     */
    function spyc_load($string)
    {
    }
    /**
     * Parses YAML to array.
     * @param string $file Path to YAML file.
     * @return array
     */
    function spyc_load_file($file)
    {
    }
    /**
     * Dumps array to YAML.
     * @param array $data Array.
     * @return string
     */
    function spyc_dump($data)
    {
    }
    function php5to4($src, $dest)
    {
    }
    function test_notify(\cli\Notify $notify, $cycle = 1000000, $sleep = \null)
    {
    }
    function test_notify_msg(\cli\Notify $notify, $cycle = 1000000, $sleep = \null)
    {
    }
}