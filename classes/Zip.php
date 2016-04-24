<?php
/**
 * Zip
 *
 * Package for managing zip files - Only FuelPHP
 *
 * @package    Zip
 * @version    0.0.1
 * @author     Valdeir Santana <valdeir.naval@gmail.com>
 * @license    http://escolhaumalicenca.com.br/licencas/mit/ MIT License
 * @copyright  2016 Valdeir Santana
 */

namespace Zip;

class Zip
{
  /** @var int Always start a new archive, this mode will overwrite the file if it already exists. */
  const OVERWRITE = \ZipArchive::OVERWRITE;

  /** @var int Create the archive if it does not exist. */
  const CREATE = \ZipArchive::CREATE;

  /** @var int Error if archive already exists. */
  const EXCL = \ZipArchive::EXCL;

  /** @var int Perform additional consistency checks on the archive, and error if they fail. */
  const CHECKCONS = \ZipArchive::CHECKCONS;

  /** @var int Compression mode dafault. */
  const CM_DEFAULT = \ZipArchive::CM_DEFAULT;

  /** @var int Compression mode store (uncompressed). */
  const CM_STORE = \ZipArchive::CM_STORE;

  /** @var int Compression mode deflate. */
  const CM_DEFLATE = \ZipArchive::CM_DEFLATE;

  /** @var int Compression mode deflate64. */
  const CM_DEFLATE64 = \ZipArchive::CM_DEFLATE64;

  /** @var int Compression mode PKWARE imploding. */
  const CM_PKWARE_IMPLODE = \ZipArchive::CM_PKWARE_IMPLODE;

  /** @var int Compression mode shrunk. */
  const CM_SHRINK = \ZipArchive::CM_SHRINK;

  /** @var int Compression mode with factor 1 */
  const CM_REDUCE_1 = \ZipArchive::CM_REDUCE_1;

  /** @var int Compression mode with factor 2 */
  const CM_REDUCE_2 = \ZipArchive::CM_REDUCE_2;

  /** @var int Compression mode with factor 3 */
  const CM_REDUCE_3 = \ZipArchive::CM_REDUCE_3;

  /** @var int Compression mode with factor 4 */
  const CM_REDUCE_4 = \ZipArchive::CM_REDUCE_4;

  /** @var int Compression mode imploded */
  const CM_IMPLODE = \ZipArchive::CM_IMPLODE;

  /** @var int Flag - Ignore case on name lookup */
  const FL_NOCASE = \ZipArchive::FL_NOCASE;

  /** @var int Flag - Ignore directory component */
  const FL_NODIR = \ZipArchive::FL_NODIR;

  /** @var int Flag - Read compressed data */
  const FL_COMPRESSED = \ZipArchive::FL_COMPRESSED;

  /** @var int Flag - Use original data, ignoring changes. */
  const FL_UNCHANGED = \ZipArchive::FL_UNCHANGED;

  /** @var int Error - No error. */
  const ER_OK = \ZipArchive::ER_OK;

  /** @var int Error - Multi-disk zip archives not supported. */
  const ER_MULTIDISK = \ZipArchive::ER_MULTIDISK;

  /** @var int Error - Renaming temporary file failed. */
  const ER_RENAME = \ZipArchive::ER_RENAME;

  /** @var int Error - Closing zip archive failed */
  const ER_CLOSE = \ZipArchive::ER_CLOSE;

  /** @var int Error - Seek error */
  const ER_SEEK = \ZipArchive::ER_SEEK;

  /** @var int Error - Read error */
  const ER_READ = \ZipArchive::ER_READ;

  /** @var int Error - Write error */
  const ER_WRITE = \ZipArchive::ER_WRITE;

  /** @var int Error - CRC error */
  const ER_CRC = \ZipArchive::ER_CRC;

  /** @var int Error - Containing zip archive was closed */
  const ER_ZIPCLOSED = \ZipArchive::ER_ZIPCLOSED;

  /** @var int Error - No such file. */
  const ER_NOENT = \ZipArchive::ER_NOENT;

  /** @var int Error - File already exists */
  const ER_EXISTS = \ZipArchive::ER_EXISTS;

  /** @var int Error - Can't open file */
  const ER_OPEN = \ZipArchive::ER_OPEN;

  /** @var int Error - Failure to create temporary file. */
  const ER_TMPOPEN = \ZipArchive::ER_TMPOPEN;

  /** @var int Error - Zlib error */
  const ER_ZLIB = \ZipArchive::ER_ZLIB;

  /** @var int Error - Memory allocation failure */
  const ER_MEMORY = \ZipArchive::ER_MEMORY;

  /** @var int Error - Entry has been changed */
  const ER_CHANGED = \ZipArchive::ER_CHANGED;

  /** @var int Error - Compression method not supported. */
  const ER_COMPNOTSUPP = \ZipArchive::ER_COMPNOTSUPP;

  /** @var int Error - Premature EOF */
  const ER_EOF = \ZipArchive::ER_EOF;

  /** @var int Error - Invalid argument */
  const ER_INVAL = \ZipArchive::ER_INVAL;

  /** @var int Error - Not a zip archive */
  const ER_NOZIP = \ZipArchive::ER_NOZIP;

  /** @var int Error - Internal error */
  const ER_INTERNAL = \ZipArchive::ER_INTERNAL;

  /** @var int Error - Zip archive inconsistent */
  const ER_INCONS = \ZipArchive::ER_INCONS;

  /** @var int Error -Can't remove file  */
  const ER_REMOVE = \ZipArchive::ER_REMOVE;

  /** @var int Error - Entry has been deleted */
  const ER_DELETED = \ZipArchive::ER_DELETED;

  /** @var int Operacional System */
  const OPSYS_ACORN_RISC = \ZipArchive::OPSYS_ACORN_RISC;

  /** @var int Operacional System */
  const OPSYS_ALTERNATE_MVS = \ZipArchive::OPSYS_ALTERNATE_MVS;

  /** @var int Operacional System */
  const OPSYS_AMIGA = \ZipArchive::OPSYS_AMIGA;

  /** @var int Operacional System */
  const OPSYS_ATARI_ST = \ZipArchive::OPSYS_ATARI_ST;

  /** @var int Operacional System */
  const OPSYS_BEOS = \ZipArchive::OPSYS_BEOS;

  /** @var int Operacional System */
  const OPSYS_DEFAULT = \ZipArchive::OPSYS_DEFAULT;

  /** @var int Operacional System */
  const OPSYS_DOS = \ZipArchive::OPSYS_DOS;

  /** @var int Operacional System */
  const OPSYS_MACINTOSH = \ZipArchive::OPSYS_MACINTOSH;

  /** @var int Operacional System */
  const OPSYS_MVS = \ZipArchive::OPSYS_MVS;

  /** @var int Operacional System */
  const OPSYS_TANDEM = \ZipArchive::OPSYS_TANDEM;

  /** @var int Operacional System */
  const OPSYS_OS_2 = \ZipArchive::OPSYS_OS_2;

  /** @var int Operacional System */
  const OPSYS_OS_400 = \ZipArchive::OPSYS_OS_400;

  /** @var int Operacional System */
  const OPSYS_OPENVMS = \ZipArchive::OPSYS_OPENVMS;

  /** @var int Operacional System */
  const OPSYS_OS_X = \ZipArchive::OPSYS_OS_X;

  /** @var int Operacional System */
  const OPSYS_UNIX = \ZipArchive::OPSYS_UNIX;

  /** @var int Operacional System */
  const OPSYS_VFAT = \ZipArchive::OPSYS_VFAT;

  /** @var int Operacional System */
  const OPSYS_VM_CMS = \ZipArchive::OPSYS_VM_CMS;

  /** @var int Operacional System */
  const OPSYS_VSE = \ZipArchive::OPSYS_VSE;

  /** @var int Operacional System */
  const OPSYS_WINDOWS_NTFS = \ZipArchive::OPSYS_WINDOWS_NTFS;

  /** @var int Operacional System */
  const OPSYS_Z_SYSTEM = \ZipArchive::OPSYS_Z_SYSTEM;

  /** @var  array default instance */
	protected static $_instance = null;

  /** @var object instance class Zip\Zip */
  protected static $_instances = [];

  /**
   * Create an empty directory
   *
   * @param string $dirname
   *
   * @return void
   */
  public static function addEmptyDir($dirname)
  {
    self::instance()->addEmptyDir($dirname);
  }

  /**
   * Add directory files
   *
   * @param string|array $folders   List directory
   * @param int          $depth     How deep the subdirectories are recurred: 0 for unlimited.
   * @param array|null   $filter    A filter for which files to read: array() for all or null for all but hidden.
   * @param string|null  $localname Where will be added to the file in the zip
   *
   * @throws \InvalidPathException when the file does not exist.
   * @throws \FileAccessException  when the file could not be opened for read.
   *
   * @return void
   */
  public static function addDir($folders, $depth = 0, $filter = null, $localname = null)
  {
    self::instance()->addDir($folders, $depth, $filter, $localname);
  }

  /**
   * Add file to zip
   *
   * @param string|array $filename
   * @param string|null  $localname Where will be added to the file in the zip
   *
   * @return void
   */
  public static function addFile($files, $localname = null)
  {
    self::instance()->addFile($files, $localname);
  }

  /**
   * Create a new file in the zip
   *
   * @param string $filenames Where will be added to the file in the zip
   * @param string $contents  File contents
   * @param bool   $override  Overwrites the file
   *
   * @return void
   */
  public static function addFromString($filenames, $contents = '', $override = true)
  {
    self::instance()->addFromString($filenames, $contents, $override);
  }

  /**
   * Add files from a directory by glob pattern
   *
   * @param string $pattern A glob() pattern against which files will be matched.
   * @param int    $flags   A bit mask of glob() flags.
   * @param array  $options An associative array of options. Available options: add_path, remove_path and remove_all_path.
   *
   * @return void
   */
  public static function addGlob($pattern, $flags = 0, array $options = [])
  {
    self::instance()->addGlob($pattern, $flags, $options);
  }

  /**
   * Add files from a directory by PCRE pattern
   *
   * @param string $pattern A PCRE pattern against which files will be matched.
   * @param string $path    The directory that will be scanned. Defaults to the current working directory.
   * @param array  $options An associative array of options. Available options: add_path, remove_path and remove_all_path.
   *
   * @return void
   */
  public static function addPattern($pattern, $path, array $options = [])
  {
    self::instance()->addPattern($pattern, $path, $options);
  }

  /**
   * Save and close the active archive
   *
   * @return void
   */
  public static function close()
  {
    self::instance()->close();
  }

  /**
   * Displays the total quantity of zip files
   *
   * @return int
   */
  public static function countFiles()
  {
    return self::instance()->countFiles();
  }

  /**
   * Call method addEmptyDir()
   *
   * @param string $dirname
   *
   * @return void
   */
  public static function createDir($dirname)
  {
    self::instance()->createDir($dirname);
  }

  /**
   * Call methodo addFromString()
   *
   * @param string|array $files    Where will be added to the file in the zip
   * @param string       $contents File contents
   * @param bool         $override Overwrites the file
   *
   * @return void
   */
  public static function createFile($files, $contents = '', $override = true)
  {
    self::instance()->createFile($files, $contents, $override);
  }

  /**
   * Delete file through the index or file name
   *
   * @param mixed $index_or_filename
   *
   * @return void
   */
  public static function delete($index_or_filename)
  {
    self::instance()->delete($index_or_filename);
  }

  /**
   * Delete file through the index
   *
   * @param int $index
   *
   * @return void
   */
  public static function deleteIndex($index)
  {
    self::instance()->deleteIndex($index);
  }

  /**
   * Delete file through the file name
   *
   * @param string $filename
   *
   * @return void
   */
  public static function deleteName($filename)
  {
    self::instance()->deleteName($filename);
  }

  /**
   * Call method extractTo()
   *
   * @param string     $dest    Destination
   * @param array|null $entries Files to extracted.
   *
   * @return void
   */
  public static function extract($dest, $entries = null)
  {
    self::instance()->extract($dest, $entries);
  }

  /**
   * Extracts a file
   *
   * @param string     $dest    Destination
   * @param array|null $entries Files to extracted.
   *
   * @throws \InvalidPathException when the basepath does not exist or is not writable.
   * @throws \FileAccessException when the basepath is not writable.
   *
   * @return void
   */
  public static function extractTo($dest, $entries = null)
  {
    self::instance()->extractTo($dest, $entries);
  }

  /**
	 * Return a specific instance, or the default instance (is created if necessary)
	 *
	 * @param   string $instance instance name
   *
   * @return object Zip_Instance
	 */
  public static function instance($instance = null)
	{
		if ($instance !== null) {
			if ( ! array_key_exists($instance, static::$_instances)) {
				return false;
			}

			return static::$_instances[$instance];
		}

    if (static::$_instance === null) {
			static::$_instance = static::forge();
		}

		return static::$_instance;
	}

  /**
	 * Gets a new instance of the Zip class.
	 *
	 * @param   string $name    instance name
   *
   * @return object Zip_Instance
	 */
  public static function forge($name = 'default')
  {
    if ($exists = static::instance($name)) {
			\Errorhandler::notice('Zip with this name exists already, cannot be overwritten.');
			return $exists;
		}

    static::$_instances[$name] = new Zip_Instance($name);

    if ($name == 'default') {
			static::$_instance = static::$_instances[$name];
		}

		return static::$_instances[$name];
  }

  /**
   * Returns the Zip archive comment
   *
   * @param int $flags Zip::FL_*
   *
   * @return string Zip archive comment
   */
  public static function getArchiveComment($flags = null)
  {
    return self::instance()->getArchiveComment($flags);
  }

  /**
   * Returns the comment of an entry using the entry index or filename
   *
   * @param string|int $index_or_filename
   * @param int        $flags Zip::FL_*
   *
   * @return string
   */
  public static function getComment($index_or_filename, $flags = null)
  {
    return self::instance()->getComment($index_or_filename, $flags);
  }

  /**
   * Returns the comment of an entry using the entry index
   *
   * @param int $index Index of the entry
   *
   * @return string
   */
  public static function getCommentIndex($index, $flags = null)
  {
    return self::instance()->getCommentIndex($index, $flags);
  }

  /**
   * Returns the comment of an entry using the entry name
   *
   * @param string $filename Name of the entry
   *
   * @return string
   */
  public static function getCommentName($filename, $flags = null)
  {
    return self::instance()->getCommentName($filename, $flags);
  }

  /**
   * Retrieve the external attributes of an entry defined by its index
   *
   * @param int $index Index of the entry.
   * @param int $opsys On success, receive the operating system code defined by one of the Zip::OPSYS_* constants.
   * @param int $attr  On success, receive the external attributes. Value depends on operating system.
   * @param int $flags Zip::FL_*
   *
   * @return string
   */
  public static function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
  {
    return self::instance()->getExternalAttributesIndex($index, $opsys, $attr, $flags);
  }

  /**
   * Retrieve the external attributes of an entry defined by its name
   *
   * @param int $index Index of the entry.
   * @param int $opsys On success, receive the operating system code defined by one of the Zip::OPSYS_* constants.
   * @param int $attr  On success, receive the external attributes. Value depends on operating system.
   * @param int $flags Zip::FL_*
   *
   * @return string
   */
  public static function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
  {
    return self::instance()->getExternalAttributesName($name, $opsys, $attr, $flags);
  }

  /**
   * Returns the entry contents using its index
   *
   * @param int $index  Index of the entry
   * @param int $length The length to be read from the entry. If 0, then the entire entry is read.
   * @param int $flags  Zip::FL_*
   *
   * @return string File contents
   */
  public static function getFromIndex($index, $length = 0, $flags = null)
  {
    return self::instance()->getFromIndex($index, $length, $flags);
  }

  /**
   * Retorna o conteúdo de entrada usando o nome do arquivo
   *
   * @param int $index  Name of the entry
   * @param int $length The length to be read from the entry. If 0, then the entire entry is read.
   * @param int $flags  Zip::FL_*
   *
   * @return string File contents
   */
  public static function getFromName($name, $length = 0, $flags = null)
  {
    return self::instance()->getFromName($name, $length, $flags);
  }

  /**
   * Returns the name of an entry using its index
   *
   * @param int $index Index of the entry
   * @param int $flags Zip::FL_*
   *
   * @return string
   */
  public static function getNameIndex($index, $flags = null)
  {
    return self::instance()->getNameIndex($index, $flags);
  }

  /**
   * Returns the status error message, system and/or zip messages
   *
   * @return string
   */
  public static function getStatusString()
  {
    return self::instance()->getStatusString();
  }

  /**
   * Get a file handler to the entry defined by its name (read only).
   *
   * @param string $name Name of the entry
   *
   * @return Resource|Bool Return false on failure
   */
  public static function getStream($name)
  {
    return self::instance()->getStream($name);
  }

  /**
   * Returns the password set in the method setPassword()
   *
   * @return string|bool
   */
  public static function getPassword()
  {
    return self::instance()->getPassword();
  }

  /**
   * Returns a list of all the zip files
   *
   * @param mixed $filter Key words for filter
   *
   * @return array
   */
  public static function listFiles($filter = null)
  {
    return self::instance()->listFiles($filter);
  }

  /**
   * Returns the index of the entry in the archive
   *
   * @param string $name  Filename
   * @param int    $flags Zip::FL_*
   *
   * @return string
   */
  public static function locateName($name, $flags = null)
  {
    return self::instance()->locateName($name, $flags);
  }

  /**
   * Open file zip
   *
   * @param string $filename  Filename
   * @param int    $flags     Zip::FL_*
   *
   * @throws ZipException Returns error message when trying to open the zip file
   *
   * @return void
   */
  public static function open($filename, $flags = null)
  {
    self::instance()->open($filename, $flags);
  }

  /**
   * Remove password file zip
   *
   * @return void
   */
  public static function removePassword()
  {
    self::instance()->setPassword(null);
  }

  /**
   * Renames an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param string     $new_name          New filename
   *
   * @return void
   */
  public static function rename($index_or_filename, $new_name = '')
  {
    self::instance()->rename($index_or_filename, $new_name);
  }

  /**
   * Renames an entry defined by its index
   *
   * @param int    $index
   * @param string $new_name New filename
   *
   * @throws ZipException
   *
   * @return void
   */
  public static function renameIndex($index, $new_name)
  {
    self::instance()->renameIndex($index, $new_name);
  }

  /**
   * Renames an entry defined by its filename
   *
   * @param string $filename
   * @param string $new_name New filename
   *
   * @return void
   */
  public static function renameName($filename, $new_name)
  {
    self::instance()->renameIndex($index, $new_name);
  }

  /**
   * Save file zip
   *
   * Before saving standard defines comment defined in the zip file;
   * Sets the default password set in zip file
   * Generate new password depending on the configuration
   *
   * @return void
   */
  public static function save()
  {
    return self::instance()->save();
  }

  /**
   * Set the comment of a ZIP archive
   *
   * @param string $comment
   *
   * @return void
   */
  public static function setArchiveComment($comment)
  {
    return self::instance()->setArchiveComment($comment);
  }

  /**
   * Set the comment of an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param string     $comment           File comment
   *
   * @return void
   */
  public static function setComment($index_or_filename, $comment = null)
  {
    self::instance()->setComment($index_or_filename, $comment);
  }

  /**
   * Set the comment of an entry defined by its index
   *
   * @param int    $index
   * @param string $comment File comment
   *
   * @return void
   */
  public static function setCommentIndex($index, $comment = null)
  {
    self::instance()->setCommentIndex($index, $comment);
  }

  /**
   * Set the comment of an entry defined by its filename
   *
   * @param string $filename
   * @param string $comment  File comment
   *
   * @return void
   */
  public static function setCommentName($name, $comment)
  {
    self::instance()->setCommentName($name, $comment);
  }

  /**
   * Set the compression method of an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param int        $comp_method       The compression method. Zip::CM_DEFAULT, Zip::CM_STORE or Zip::CM_DEFLATE.
   *
   * @return void
   */
  public static function setCompression($index_or_filename, $comp_method = Zip::CM_DEFAULT)
  {
    self::instance()->setCompression($index_or_filename, $comp_method);
  }

  /**
   * Set the compression method of an entry defined by its index
   *
   * @param int $index
   * @param int  The compression method. Zip::CM_DEFAULT, Zip::CM_STORE or Zip::CM_DEFLATE.
   *
   * @return void
   */
  public static function setCompressionIndex($index, $comp_method = Zip::CM_DEFAULT)
  {
    self::instance()->setCompressionIndex($index, $comp_method);
  }

  /**
   * Set the compression method of an entry defined by its index
   *
   * @param string $filename
   * @param int    $comp_method The compression method. Zip::CM_DEFAULT, Zip::CM_STORE or Zip::CM_DEFLATE.
   *
   * @return void
   */
  public static function setCompressionName($name, $comp_method = Zip::CM_DEFAULT)
  {
    self::instance()->setCompressionName($name, $comp_method);
  }

  /**
   * Set the external attributes of an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param int        $opsys             The operating system code defined by one of the Zip::OPSYS_* constants.
   * @param int        $attr              The external attributes. Value depends on operating system.
   *
   * @return void
   */
  public static function setExternalAttributes($index_or_filename, $opsys, $attr)
  {
    self::instance()->setExternalAttributes($index_or_filename, $opsys, $attr);
  }

  /**
   * Set the external attributes of an entry defined by its index
   *
   * @param int $index
   * @param int $opsys The operating system code defined by one of the Zip::OPSYS_* constants.
   * @param int $attr  The external attributes. Value depends on operating system.
   *
   * @return void
   */
  public static function setExternalAttributesIndex($index, $opsys, $attr)
  {
    self::instance()->setExternalAttributesIndex($index, $opsys, $attr);
  }

  /**
   * Set the external attributes of an entry defined by its name
   *
   * @param string $filename
   * @param int    $opsys    The operating system code defined by one of the Zip::OPSYS_* constants.
   * @param int    $attr     The external attributes. Value depends on operating system.
   *
   * @return void
   */
  public static function setExternalAttributesName($filename, $opsys, $attr)
  {
    self::instance()->setExternalAttributesName($filename, $opsys, $attr);
  }

  /**
   * Set the password for the active archive
   *
   * @param string $password
   *
   * @return void
   */
  public static function setPassword($password)
  {
    self::instance()->setPassword($password);
  }

  /**
   * Get the details of an entry defined by its index or filename.
   *
   * @param string|int $index_or_filename
   * @param int        $flags             Zip::FL_*
   *
   * @return string/array
   */
  public static function stat($index_or_filename, $flags = null)
  {
    return self::instance()->stat($index_or_filename, $flags);
  }

  /**
   * Get the details of an entry defined by its index.
   *
   * @param int $index
   * @param int $flags Zip::FL_*
   *
   * @return object Current instance
   */
  public static function statIndex($index, $flags = null)
  {
    return self::instance()->statIndex($index, $flags);
  }

  /**
   * Get the details of an entry defined by its filename.
   *
   * @param string $filename
   * @param int    $flags    Zip::FL_*
   *
   * @return object Current instance
   */
  public static function statName($filename, $flags = null)
  {
    return self::instance()->statName($filename, $flags);
  }

  /**
   * Undo all changes done in the archive
   *
   * @return void
   */
  public static function unchangeAll()
  {
    self::instance()->unchangeAll();
  }

  /**
   * Revert all global changes done in the archive.
   *
   * @return void
   */
  public static function unchangeArchive()
  {
    self::instance()->unchangeArchive();
  }

  /**
   * Revert all changes done to an entry at the given index
   *
   * @return void
   */
  public static function unchangeIndex()
  {
    self::instance()->unchangeIndex();
  }

  /**
   * Revert all changes done to an entry with the given name.
   *
   * @return void
   */
  public static function unchangeName()
  {
    self::instance()->unchangeName();
  }
}
