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

class Zip_Instance
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

  /** @var object instance class Zip\Zip */
  protected static $_instance = null;

  /** @var object instance class \ZipArchive */
  protected $_zip_archive = null;

  /** @var string|null Commentary Archive */
  private $_comment = null;

  /** @var mixed Password Archive */
  private $_password = null;

  /** @var bool Enables password generator for the file */
  private $_password_generator_enabled = false;

  /** @var int Password Length */
  private $_password_generator_length = 8;

  /** @var string Password Type [alnum, numeric, nozero, alpha, distinct, hexdec, unique, sha1 and uuid] */
  private $_password_generator_type = 'alnum';

  /** @var array File List Zip */
  private $_list_files = [];

  /** @var string Filename */
  private $_filename = null;

  /** @var array Allowed operating system */
  private $_opt_sys = [
    Zip_Instance::OPSYS_ACORN_RISC,
    Zip_Instance::OPSYS_ALTERNATE_MVS,
    Zip_Instance::OPSYS_AMIGA,
    Zip_Instance::OPSYS_ATARI_ST,
    Zip_Instance::OPSYS_BEOS,
    Zip_Instance::OPSYS_DEFAULT,
    Zip_Instance::OPSYS_DOS,
    Zip_Instance::OPSYS_MACINTOSH,
    Zip_Instance::OPSYS_MVS,
    Zip_Instance::OPSYS_TANDEM,
    Zip_Instance::OPSYS_OS_2,
    Zip_Instance::OPSYS_OS_400,
    Zip_Instance::OPSYS_OPENVMS,
    Zip_Instance::OPSYS_OS_X,
    Zip_Instance::OPSYS_UNIX,
    Zip_Instance::OPSYS_VFAT,
    Zip_Instance::OPSYS_VM_CMS,
    Zip_Instance::OPSYS_VSE,
    Zip_Instance::OPSYS_WINDOWS_NTFS,
    Zip_Instance::OPSYS_Z_SYSTEM,
  ];

  /**
   * Create an empty directory
   *
   * @param string $dirname
   *
   * @return object Current instance
   */
  public function addEmptyDir($dirname)
  {
    $this->_zip_archive->addEmptyDir(preg_replace('/\W/', '', $dirname));

    return $this;
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
   * @return object Current instance
   */
  public function addDir($folders, $depth = 0, $filter = null, $localname = null)
  {
    $files = [];

    if (is_array($folders)) {
      foreach($folders as $folder) {
        $files[$folder] = \File::read_dir($folder, $depth, $filter);
      }
    } else {
      $files[$folders] = \File::read_dir($folders, $depth, $filter);
    }

    $this->getPath($files);

    foreach($this->_list_files as $file) {
      $this->addFile(
        $file,
        str_replace([
          APPPATH,
          COREPATH,
          DOCROOT,
          PKGPATH,
          VENDORPATH,
        ], '', pathinfo($file, PATHINFO_DIRNAME))
      );
    }

    return $this->_list_files;
  }

  /**
   * Organizes files list
   *
   * @param string|array $files
   * @param string       $path  File path
   *
   * @return void
   */
  private function getPath($files, $path = '')
  {
    if (is_array($files)) {
      foreach($files as $folder => $file) {
        if (is_array($file)) {
          $this->getPath($file, $path.$folder.'/');
        } else {
          $this->getPath($file, $path);
        }
      }
    }

    if (is_string($files)) {
      $this->_list_files[] = $path.$files;
    }
  }

  /**
   * Add file to zip
   *
   * @param string|array $filename
   * @param string|null  $localname Where will be added to the file in the zip
   *
   * @return object Current instance
   */
  public function addFile($files, $localname = null)
  {
    if (is_array($files)) {
      foreach($files as $key => $value) {
        if (is_int($key)) {
          $this->addFileToZip($value, $localname);
        } else {
          $this->addFileToZip($key, $value);
        }
      }
    } else {
      $this->addFileToZip($files, $localname);
    }

    return $this;
  }

  /**
   * Add file to zip
   *
   * @param string      $filename
   * @param string|null $localname Where will be added to the file in the zip
   *
   * @return bool
   */
  private function addFileToZip($filename, $localname = null)
  {
    if ($localname === null) {
      $localname . basename($filename);
    }

    if ( empty($localname)) {
      $localname = basename($filename);
    }
    elseif ( !empty($localname) && ! \Str::ends_with($localname, '/')) {
      $localname .= '/' . basename($filename);
    }

    $result = $this->_zip_archive->addFile($filename, $localname);

    return $result;
  }

  /**
   * Create a new file in the zip
   *
   * @param string|array $filenames Where will be added to the file in the zip
   * @param string       $contents  File contents
   * @param bool         $override  Overwrites the file
   *
   * @return object Current instance
   */
  public function addFromString($filenames, $contents = '', $override = true)
  {
    if (is_array($filenames)) {
      foreach($filenames as $filename => $content) {
        if (($override === true) && !$this->getFromName($filename)) {
          $this->_zip_archive->addFromString($filename, $content);
        }
      }
    } else {
      if (($override === true) && !$this->getFromName($filenames)) {
        $this->_zip_archive->addFromString($filenames, $contents);
      }
    }

    return $this;
  }

  /**
   * Add files from a directory by glob pattern
   *
   * @param string $pattern A glob() pattern against which files will be matched.
   * @param int    $flags   A bit mask of glob() flags.
   * @param array  $options An associative array of options. Available options: add_path, remove_path and remove_all_path.
   *
   * @return object|bool Current instance. Return false on failure
   */
  public function addGlob($pattern, $flags = 0, array $options = [])
  {
    $result = $this->_zip_archive->addGlob($pattern, $flags, $options);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Add files from a directory by PCRE pattern
   *
   * @param string $pattern A PCRE pattern against which files will be matched.
   * @param string $path    The directory that will be scanned. Defaults to the current working directory.
   * @param array  $options An associative array of options. Available options: add_path, remove_path and remove_all_path.
   *
   * @return object|bool Current instance. Return false on failure
   */
  public function addPattern($pattern, $path, array $options = [])
  {
    $result = $this->_zip_archive->addPattern($pattern, $path, $options);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Save and close the active archive
   *
   * @return bool
   */
  public function close()
  {
    if (\File::exists($this->_zip_archive->filename)) {
      return $this->_zip_archive->close();
    } else {
      return false;
    }
  }

  /**
   * Displays the total quantity of zip files
   *
   * @return int
   */
  public function countFiles()
  {
    return (int)$this->_zip_archive->numFiles;
  }

  /**
   * Call method addEmptyDir()
   *
   * @param string|array $dirname
   *
   * @return object Current instance
   */
  public function createDir($dirname)
  {
    if (is_array($dirname)) {
      foreach($dirname as $dir) {
        $this->addEmptyDir($dir);
      }
    } else {
      $this->addEmptyDir($dirname);
    }

    return $this;
  }

  /**
   * Call methodo addFromString()
   *
   * @param string|array $files    Where will be added to the file in the zip
   * @param string       $contents File contents
   * @param bool         $override Overwrites the file
   *
   * @return object Current instance
   */
  public function createFile($files, $contents = '', $override = true)
  {
    $this->addFromString($files, $contents);

    return $this;
  }

  /**
   * Delete file through the index or file name
   *
   * @param mixed $index_or_filename
   *
   * @return object Current instance
   */
  public function delete($index_or_filename)
  {
    if (is_array($index_or_filename)) {
      foreach($index_or_filename as $key) {
        if (is_int($key)) {
          $this->deleteIndex($key);
        } else {
          $this->deleteName($key);
        }
      }
    } else {
      if (is_int($index_or_filename)) {
        $this->deleteIndex($index_or_filename);
      } else {
        $this->deleteName($index_or_filename);
      }
    }

    return $this;
  }

  /**
   * Delete file through the index
   *
   * @param int|array $index
   *
   * @return object Current instance
   */
  public function deleteIndex($index)
  {
    if (is_array($index)) {
      foreach($index as $key) {
        $this->_zip_archive->deleteIndex($key);
      }
    } else {
      $this->_zip_archive->deleteIndex($index);
    }

    return $this;
  }

  /**
   * Delete file through the file name
   *
   * @param string|array $filename
   *
   * @return object Current instance
   */
  public function deleteName($filename)
  {
    if (is_array($filename)) {
      foreach($filename as $key) {
        $this->_zip_archive->deleteName($key);
      }
    } else {
      $this->_zip_archive->deleteName($filename);
    }

    return $this;
  }

  /**
   * Call method extractTo()
   *
   * @param string     $dest    Destination
   * @param array|null $entries Files to extracted.
   *
   * @return object|bool Current instance. Return false on failure
   */
  public function extract($dest, $entries = null)
  {
    $result = $this->extractTo($dest, $entries);

    if ($result) {
      return $this;
    } else {
      return false;
    }
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
   * @return object|bool Current instance. Return false on failure
   */
  public function extractTo($dest, $entries = null)
  {
    if (! \File::exists($dest)) {
      \File::create_dir(pathinfo($dest, PATHINFO_DIRNAME), pathinfo($dest, PATHINFO_BASENAME));
    }

    $result = $this->_zip_archive->extractTo($dest, $entries);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Returns the Zip archive comment
   *
   * @param int $flags Zip_Instance::FL_*
   *
   * @return string Zip archive comment
   */
  public function getArchiveComment($flags = null)
  {
    return $this->_zip_archive->getArchiveComment($flags);
  }

  /**
   * Returns the comment of an entry using the entry index or filename
   *
   * @param string|int $index_or_filename
   * @param int        $flags Zip_Instance::FL_*
   *
   * @return string
   */
  public function getComment($index_or_filename, $flags = null)
  {
    if (is_int($index_or_filename)) {
      return $this->getCommentIndex($index_or_filename, $flags);
    }
    else {
      return $this->getCommentName($index_or_filename, $flags);
    }
  }

  /**
   * Returns the comment of an entry using the entry index
   *
   * @param int $index Index of the entry
   *
   * @return string
   */
  public function getCommentIndex($index, $flags = null)
  {
    return $this->_zip_archive->getCommentIndex($index, $flags);
  }

  /**
   * Returns the comment of an entry using the entry name
   *
   * @param string $filename Name of the entry
   *
   * @return string
   */
  public function getCommentName($filename, $flags = null)
  {
    return $this->_zip_archive->getCommentName($filename, $flags);
  }

  /**
   * Retrieve the external attributes of an entry defined by its index
   *
   * @param int $index Index of the entry.
   * @param int $opsys On success, receive the operating system code defined by one of the Zip_Instance::OPSYS_* constants.
   * @param int $attr  On success, receive the external attributes. Value depends on operating system.
   * @param int $flags Zip_Instance::FL_*
   *
   * @return string
   */
  public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags = null)
  {
    return $this->_zip_archive->getExternalAttributesIndex($index, $opsys, $attr, $flags);
  }

  /**
   * Retrieve the external attributes of an entry defined by its name
   *
   * @param int $index Index of the entry.
   * @param int $opsys On success, receive the operating system code defined by one of the Zip_Instance::OPSYS_* constants.
   * @param int $attr  On success, receive the external attributes. Value depends on operating system.
   * @param int $flags Zip_Instance::FL_*
   *
   * @return string
   */
  public function getExternalAttributesName($name, &$opsys, &$attr, $flags = null)
  {
    return $this->_zip_archive->getExternalAttributesName($name, $opsys, $attr, $flags);
  }

  /**
   * Returns the entry contents using its index
   *
   * @param int $index  Index of the entry
   * @param int $length The length to be read from the entry. If 0, then the entire entry is read.
   * @param int $flags  Zip_Instance::FL_*
   *
   * @throws ZipException Returns an error when the value of $index is not integer.
   *
   * @return string File contents
   */
  public function getFromIndex($index, $length = 0, $flags = null)
  {
    if (is_int($index)) {
      return $this->_zip_archive->getFromIndex($index, $length, $flags);
    }

    throw new ZipException(\Lang::get('error_should_be_number'), 24);
  }

  /**
   * Retorna o conteúdo de entrada usando o nome do arquivo
   *
   * @param int $index  Name of the entry
   * @param int $length The length to be read from the entry. If 0, then the entire entry is read.
   * @param int $flags  Zip_Instance::FL_*
   *
   * @return string File contents
   */
  public function getFromName($name, $length = 0, $flags = null)
  {
    return $this->_zip_archive->getFromName($name, $length, $flags);
  }

  /**
   * Returns the name of an entry using its index
   *
   * @param int $index Index of the entry
   * @param int $flags Zip_Instance::FL_*
   *
   * @return string
   */
  public function getNameIndex($index, $flags = null)
  {
    if ( !is_null($flags) && $flags !== Zip_Instance::FL_UNCHAGED) {
      throw new ZipException(\Lang::get('error_flags_unsupported'), 27);
    }

    return $this->_zip_archive->getNameIndex($index, $flags);
  }

  /**
   * Returns the status error message, system and/or zip messages
   *
   * @return string
   */
  public function getStatusString()
  {
    return \Lang::get(
      'error_' . $this->_zip_archive->status,
      [],
      $this->_zip_archive->getStatusString()
    );
  }

  /**
   * Get a file handler to the entry defined by its name (read only).
   *
   * @param string $name Name of the entry
   *
   * @return Resource|Bool Return false on failure
   */
  public function getStream($name)
  {
    return $this->_zip_archive->getStream($name);
  }

  /**
   * Returns the password set in the method setPassword()
   *
   * @return string|bool
   */
  public function getPassword()
  {
    return $this->_password;
  }

  /**
   * Returns a list of all the zip files
   *
   * @param mixed $filter Key words for filter
   *
   * @return array
   */
  public function listFiles($filter = null)
  {
    $files = [];

    for($i = 0; $i <= $this->countFiles(); $i++) {
      $file = $this->getNameIndex($i);
      if (is_array($filter)) {
        foreach($filter as $entry) {
          if (strpos($file, $entry)) {
            $files[$i] = $file;
          }
        }
      }
      elseif ( !is_null($filter) && strpos($file, $filter)) {
        $files[$i] = $file;
      }
      elseif (is_null($filter)) {
        $files[$i] = $file;
      }
    }

    return $files;
  }

  /**
   * Returns the index of the entry in the archive
   *
   * @param string $name  Filename
   * @param int    $flags Zip_Instance::FL_*
   *
   * @return string
   */
  public function locateName($name, $flags = null)
  {
    return (int)$this->_zip_archive->locateName($name, $flags);
  }

  /**
   * Open file zip
   *
   * @param string $filename  Filename
   * @param int    $flags     Zip_Instance::FL_*
   *
   * @throws ZipException Returns error message when trying to open the zip file
   *
   * @return object Current instance
   */
  public function open($filename, $flags = null)
  {
    $open = $this->_zip_archive->open($filename, $flags);

    if ($open !== true) {
      throw new ZipException(\Lang::get('error_' . $open), $open);
    }

    return $this;
  }

  /**
   * Remove password file zip
   *
   * @return object Current instance
   */
  public function removePassword()
  {
    $result = $this->setPassword(null);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Renames an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param string     $new_name          New filename
   *
   * @return object Current instance
   */
  public function rename($index_or_filename, $new_name = '')
  {
    if (is_array($index_or_filename)) {
      foreach($index_or_filename as $filename => $new_filename) {
        if (is_int($filename)) {
          $this->renameIndex($filename, $new_filename);
        } else {
          $this->renameName($filename, $new_filename);
        }
      }
    } else {
      if (is_int($index_or_filename)) {
        $this->renameIndex($index_or_filename, $new_name);
      } else {
        $this->renameName($index_or_filename, $new_name);
      }
    }

    return $this;
  }

  /**
   * Renames an entry defined by its index
   *
   * @param int    $index
   * @param string $new_name New filename
   *
   * @throws ZipException
   *
   * @return object Current instance
   */
  public function renameIndex($index, $new_name)
  {
    if (empty($new_name)) {
      throw new ZipException(\Lang::get('error_name_required'), 28);
    }

    $result = $this->_zip_archive->renameIndex($index, preg_replace('/([^\p{L}\s\d\-_~,;:\[\]\(\).\'])/', '', $new_name));

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Renames an entry defined by its filename
   *
   * @param string $filename
   * @param string $new_name New filename
   *
   * @return object Current instance
   */
  public function renameName($filename, $new_name)
  {
    if (empty($new_name)) {
      throw new ZipException(\Lang::get('error_name_required'), 28);
    }

    $result = $this->_zip_archive->renameName($filename, preg_replace('/([^\p{L}\s\d\-_~,;:\[\]\(\).\'])/', '', $new_name));

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Save file zip
   *
   * Before saving standard defines comment defined in the zip file;
   * Sets the default password set in zip file
   * Generate new password depending on the configuration
   *
   * @return string
   */
  public function save()
  {
    if ( !is_null($this->_comment) && $this->_comment !== false) {
      $this->setArchiveComment($this->_comment);
    }

    if ( !empty($this->_password)) {
      $this->setPassword($this->_password);
    }

    if (
      $this->_password_generator_enabled !== false &&
      is_null($this->_password)
    ){
      $this->setPassword(\Str::random($this->_password_generator_type, $this->_password_generator_length));
    }

    $filename = $this->_zip_archive->filename;

    $this->close();

    return $filename;
  }

  /**
   * Set the comment of a ZIP archive
   *
   * @param string $comment
   *
   * @return object Current instance
   */
  public function setArchiveComment($comment)
  {
    $result = $this->_zip_archive->setArchiveComment($comment);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Set the comment of an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param string     $comment           File comment
   *
   * @return object Current instance
   */
  public function setComment($index_or_filename, $comment = null)
  {
    if (is_array($index_or_filename)) {
      foreach($index_or_filename as $key => $value) {
        if (is_int($key)) {
          $this->setCommentIndex($key, $value);
        } else {
          $this->setCommentName($key, $value);
        }
      }
    }

    return $this;
  }

  /**
   * Set the comment of an entry defined by its index
   *
   * @param int    $index
   * @param string $comment File comment
   *
   * @return object Current instance
   */
  public function setCommentIndex($index, $comment = null)
  {
    if (is_array($index)) {
      foreach($index as $key) {
        $this->_zip_archive->setCommentIndex($key, $comment);
      }
    } else {
      $this->_zip_archive->setCommentIndex($index, $comment);
    }

    return $this;
  }

  /**
   * Set the comment of an entry defined by its filename
   *
   * @param string $filename
   * @param string $comment  File comment
   *
   * @return object Current instance
   */
  public function setCommentName($name, $comment)
  {
    if (is_array($name)) {
      foreach($name as $key) {
        $this->_zip_archive->setCommentName($key, $comment);
      }
    } else {
      $this->_zip_archive->setCommentName($name, $comment);
    }

    return $this;
  }

  /**
   * Set the compression method of an entry defined by its index or filename
   *
   * @param string|int $index_or_filename
   * @param int        $comp_method       The compression method. Zip_Instance::CM_DEFAULT, Zip_Instance::CM_STORE or Zip_Instance::CM_DEFLATE.
   *
   * @return object Current instance
   */
  public function setCompression($index_or_filename, $comp_method = Zip_Instance::CM_DEFAULT)
  {
    if (is_array($index_or_filename)) {
      foreach($index_or_filename as $key => $value) {
        if (is_int($key)) {
          $this->setCompressionIndex($key, $value);
        } else {
          $this->setCompressionName($key, $value);
        }
      }
    } else {
      if (is_int($index_or_filename)) {
        $this->setCompressionIndex($index_or_filename, $value);
      } else {
        $this->setCompressionName($index_or_filename, $value);
      }
    }

    return $this;
  }

  /**
   * Set the compression method of an entry defined by its index
   *
   * @param int $index
   * @param int  The compression method. Zip_Instance::CM_DEFAULT, Zip_Instance::CM_STORE or Zip_Instance::CM_DEFLATE.
   *
   * @return object Current instance
   */
  public function setCompressionIndex($index, $comp_method = Zip_Instance::CM_DEFAULT)
  {
    if (
      $comp_method !== Zip_Instance::CM_DEFAULT &&
      $comp_method !== Zip_Instance::CM_STORE &&
      $comp_method !== Zip_Instance::CM_DEFLATE
    ){
      throw new ZipException(\Lang::get('error_method_unsupported', [
        ':method' => $comp_method
      ]));
    }

    if (is_array($index)) {
      foreach ($index as $key => $cm_method) {
        $this->setCompressionIndex($key, $cm_method);
      }
    } else {
      $this->_zip_archive->setCompressionIndex($index, $comp_method);
    }

    return $this;
  }

  /**
   * Set the compression method of an entry defined by its index
   *
   * @param string $filename
   * @param int    $comp_method The compression method. Zip_Instance::CM_DEFAULT, Zip_Instance::CM_STORE or Zip_Instance::CM_DEFLATE.
   *
   * @return object Current instance
   */
  public function setCompressionName($name, $comp_method = Zip_Instance::CM_DEFAULT)
  {
    if (
      $comp_method !== Zip_Instance::CM_DEFAULT &&
      $comp_method !== Zip_Instance::CM_STORE &&
      $comp_method !== Zip_Instance::CM_DEFLATE
    ){
      throw new ZipException(\Lang::get('error_method_unsupported', [
        ':method' => $comp_method
      ]));
    }

    if (is_array($name)) {
      foreach ($name as $key => $cm_method) {
        $this->setCompressionName($key, $cm_method);
      }
    } else {
      $this->_zip_archive->setCompressionName($name, $comp_method);
    }

    return $this;
  }

  /**
   * Set the external attributes of an entry defined by its index or filename
   *
   * @param mixed $index_or_filename
   * @param int   $opsys             The operating system code defined by one of the Zip_Instance::OPSYS_* constants.
   * @param int   $attr              The external attributes. Value depends on operating system.
   *
   * @return object Current instance
   */
  public function setExternalAttributes($index_or_filename, $opsys, $attr)
  {
    if (is_array($index_or_filename)) {
      foreach ($index_or_filename as $key => $value) {
        if (is_int($value['index'])) {
          $this->setExternalAttributesIndex($value['index'], $value['opsys'], $value['attr']);
        } else {
          $this->setExternalAttributesName($value['index'], $value['opsys'], $value['attr']);
        }
      }
    } else {
      if (is_int($index_or_filename)) {
        $this->setExternalAttributesIndex($index_or_filename, $opsys, $attr);
      } else {
        $this->setExternalAttributesName($index_or_filename, $opsys, $attr);
      }
    }

    return $this;
  }

  /**
   * Set the external attributes of an entry defined by its index
   *
   * @param int $index
   * @param int $opsys The operating system code defined by one of the Zip_Instance::OPSYS_* constants.
   * @param int $attr  The external attributes. Value depends on operating system.
   *
   * @return object Current instance
   */
  public function setExternalAttributesIndex($index, $opsys, $attr)
  {
    if ( !isset($this->_opt_sys[$opsys])) {
      throw new ZipException(\Lang::get('error_opsys_unsupported', [
        ':opsys' => $opsys
      ]), 26);
    }

    if (is_array($index)) {
      foreach($index as $key => $value) {
        $this->_zip_archive->setExternalAttributesIndex($value['index'], $value['opsys'], $value['attr']);
      }
    } else {
      $this->_zip_archive->setExternalAttributesIndex($index, $opsys, $attr);
    }

    return $this;
  }

  /**
   * Set the external attributes of an entry defined by its name
   *
   * @param string $filename
   * @param int    $opsys    The operating system code defined by one of the Zip_Instance::OPSYS_* constants.
   * @param int    $attr     The external attributes. Value depends on operating system.
   *
   * @return object Current instance
   */
  public function setExternalAttributesName($filename, $opsys, $attr)
  {
    if ( !isset($this->_opt_sys[$opsys])) {
      throw new ZipException(\Lang::get('error_opsys_unsupported', [
        ':opsys' => $opsys
      ]), 26);
    }

    if (is_array($filename)) {
      foreach($filename as $key => $value) {
        $this->_zip_archive->setExternalAttributesName($value['index'], $value['opsys'], $value['attr']);
      }
    } else {
      $this->_zip_archive->setExternalAttributesName($filename, $opsys, $attr);
    }

    return $this;
  }

  /**
   * Set the password for the active archive
   *
   * @param string $password
   *
   * @return object/Bool Current instance/Return false on failure
   */
  public function setPassword($password)
  {
    $this->_password = $password;
    $result = $this->_zip_archive->setPassword($password);

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Get the details of an entry defined by its index or filename.
   *
   * @param mixed $index_or_filename
   * @param int   $flags             Zip_Instance::FL_*
   *
   * @return string/array
   */
  public function stat($index_or_filename, $flags = null)
  {
    if ($flags !== null && Zip_Instance::FL_UNCHANGED) {
      throw new ZipException(\Lang::get('error_flags_unsupported'), 27);
    }

    $files = null;

    if (is_array($index_or_filename)) {
      foreach($index_or_filename as $key => $flag) {
        if (is_int($key)) {
          $files[] = $this->statIndex($key, $flag);
        } else {
          $files[] = $this->statName($key, $flag);
        }
      }
    } else {
      if (is_int($index_or_filename)) {
        $files = $this->statIndex($index_or_filename, $flags);
      } else {
        $files = $this->statName($index_or_filename, $flags);
      }
    }

    return $files;
  }

  /**
   * Get the details of an entry defined by its index.
   *
   * @param int|array $index
   * @param int       $flags Zip_Instance::FL_*
   *
   * @return object Current instance
   */
  public function statIndex($index, $flags = null)
  {
    if ($flags !== null && Zip_Instance::FL_UNCHANGED) {
      throw new ZipException(\Lang::get('error_flags_unsupported'), 27);
    }

    $files = null;

    if (is_array($index)) {
      foreach($index as $key => $flag) {
        $files[] = $this->_zip_archive->statIndex($key, $flag);
      }
    } else {
      $files = $this->_zip_archive->statIndex($index, $flags);
    }

    return $files;
  }

  /**
   * Get the details of an entry defined by its filename.
   *
   * @param string|array $filename
   * @param int          $flags    Zip_Instance::FL_*
   *
   * @return object Current instance
   */
  public function statName($filename, $flags = null)
  {
    if ($flags !== null && Zip_Instance::FL_UNCHANGED) {
      throw new ZipException(\Lang::get('error_flags_unsupported'), 27);
    }

    $files = null;

    if (is_array($filename)) {
      foreach($filename as $key => $flag) {
        $files[] = $this->_zip_archive->statName($key, $flag);
      }
    } else {
      $files = $this->_zip_archive->statName($filename, $flags);
    }

    return $files;
  }

  /**
   * Undo all changes done in the archive
   *
   * @return object Current instance
   */
  public function unchangeAll()
  {
    $this->_zip_archive->unchangeAll();

    if ($result) {
      return $this;
    } else {
      return false;
    }
  }

  /**
   * Revert all global changes done in the archive.
   *
   * @return object Current instance
   */
  public function unchangeArchive()
  {
    $this->_zip_archive->unchangeArchive();
  }

  /**
   * Revert all changes done to an entry at the given index
   *
   * @return object Current instance
   */
  public function unchangeIndex()
  {
    $this->_zip_archive->unchangeIndex();
  }

  /**
   * Revert all changes done to an entry with the given name.
   *
   * @return object Current instance
   */
  public function unchangeName()
  {
    $this->_zip_archive->unchangeName();
  }

  /**
   * Instanzia novo objeto \ZipArchive e carrega as ocnfigurações
   *
   * @param string $instance
   * @param array  $config
   *
   * @return void
   */
  public function __construct($instance = 'default')
  {
    $this->_zip_archive = new \ZipArchive;

    \Lang::load('zip');
    \Config::load('zip');

    $this->_comment = \Config::get($instance . '.comment', null);
    $this->_password = \Config::get($instance . '.password', null);
    $this->_password_generator_enabled = \Config::get($instance . '.password_generator.enabled', false);
    $this->_password_generator_length = \Config::get($instance . '.password_generator.length', 8);
    $this->_password_generator_type = \Config::get($instance . '.password_generator.type', 'alnum');
  }

  /**
   * Remove zip files
   *
   * @param string|int $index_or_filename
   *
   * @return object Current instance
   */
  public function __unset($index_or_filename)
  {
    if (is_int($index_or_filename)) {
      $this->deleteIndex($index_or_filename);
    }
    else {
      $this->deleteName($index_or_filename);
    }
  }

  /**
   * Remove zip files
   *
   * @param string|int $index_or_filename
   *
   * @return object Current instance
   */
  public function __isset($index_or_filename)
  {
    if (is_int($index_or_filename)) {
      $this->getNameIndex($index_or_filename);
    }
    else {
      $this->locateName($index_or_filename);
    }
  }
}
