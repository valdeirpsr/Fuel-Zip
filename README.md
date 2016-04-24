# Fuel Zip package


## Install

Via Composer

``` json
{
    "require": {
        "valdeirpsr/Zip": "dev-master"
    }
}
```

Via Composer (Command Line)

``` shell
composer require valdeirpsr/Zip
```


## Configuration

``` php
return [
  'default' => [
    'comment' => 'Created ' . date('c'),
    'password' => null,
    'save_to' => null,
    'password_generator' => [
      'enabled' => false,
      'length' => 8,
      'type' => 'alnum'
    ]
  ]
];

```

## Translate
``` php
return [
    'error_0' => 'No error',
	'error_1' => 'Multi-disk zip archives not supported',
	'error_2' => 'Renaming temporary file failed',
	'error_3' => 'Closing zip archive failed',
	'error_4' => 'Seek error',
	'error_5' => 'Read error',
	'error_6' => 'Write error',
	'error_7' => 'CRC error',
	'error_8' => 'Containing zip archive was closed',
	'error_9' => 'No such file',
	'error_10' => 'File already exists',
	'error_11' => 'Can\'t open file',
	'error_12' => 'Failure to create temporary file',
	'error_13' => 'Zlib error',
	'error_14' => 'Malloc failure',
	'error_15' => 'Entry has been changed',
	'error_16' => 'Compression method not supported',
	'error_17' => 'Premature EOF',
	'error_18' => 'Invalid argument',
	'error_19' => 'Not a zip archive',
	'error_20' => 'Internal error',
	'error_21' => 'Zip archive inconsistent',
	'error_22' => 'Can\'t remove file',
	'error_23' => 'Entry has been deleted',
	'error_should_be_number' => 'A non well formed numeric value encountered',
	'error_method_unsupported' => 'Method \':method\' unsupported',
	'error_opsys_unsupported' => 'Operaciocnal System \':opsys\' unsupported',
	'error_flags_unsupported' => 'Flag unsupported',
	'error_name_required' => 'New name is required!',
];
```


## Usage

``` php
Zip\Zip::forge();
Zip\Zip::open("teste.zip", Zip\Zip::CREATE);
Zip\Zip::addEmptyDir("new_folder");
Zip\Zip::addFile("index.php");
Zip\Zip::addFile("favicon.ico");
Zip\Zip::addDir(DOCROOT."files");
Zip\Zip::save();

// Or
$zip = new Zip\Zip;
$zip->open("teste2.zip", Zip\Zip::CREATE);
$zip->addEmptyDir("new_folder");
$zip->addFile("index.php");
$zip->addFile("favicon.ico");
$zip->addDir(DOCROOT."files");
$zip->save();
```


## Creating directory in the zip file

``` php
$zip->createDir([
  'one',
  'two'
]);
$zip->createDir('three');
```

## Creating file in the zip file

``` php
$zip->createFile([
  'pass.pwd' => 'File content',
  'error_log.txt' => 'No error'
]);
$zip->createFile('music.txt', 'Na alegria, na tristeza, sempre lado a lado
Com carinho ensinou meus primeiro passos
Mais uma guerreira de pele escura, sofredora
Tenho muito orgulho de minha coroa
Sua garra, seu jeito simples de ser
Essas qualidades são exemplo pra viver
Seus conselhos foram forças pra nunca desistir
Muito obrigado por você existir

Link: http://www.vagalume.com.br/509-e/rainha-do-lar.html');
```

## Deleting files

``` php
// By Index
$zip->delete(1);

// By Filename
$zip->delete([
  'music.txt',
  'file2.txt
]);
```

## Renaming files

``` php
// Old Name, New Name
$zip->rename('error_log.txt', 'no_error.txt');

$zip->rename([
  'music.txt' => 'Rainha do Lar - 509-E.txt' // Old Name => New Name
]);
```

## Describing files

``` php
// Index, Description
$zip->setComment(1, 'First comment');

$zip->setComment([
  'Rainha do Lar - 509-E.txt' => 'Brazilian rap' //Filename => Description
]);

// Comment the zip
$zip->setArchiveComment("new comment");
```

## Adding directories
``` php
$zip->addDir(DOCROOT."files/music");

// Or
$zip->addDir([
  DOCROOT."files/music",
  DOCROOT."files/photo",
  DOCROOT."files/videos"
]);

// Or with filter
$zip->addDir([
  DOCROOT."files/music",
  DOCROOT."files/photo",
  DOCROOT."files/videos"
], 0, [
  '!^\.', // no hidden files/dirs
  '!^private' => 'dir', // no private dirs
  '\.png$' => 'file', // only get png's
  '\.css$' => 'file', // or css files
  '!^_', // exclude everything that starts with an underscore.
]);
```

## Adding files
``` php
$zip->addFile(DOCROOT."music1.mp3");
$zip->addFile(DOCROOT."music2.mp3");
$zip->addFile(DOCROOT."music3.mp3");

// Or
$zip->addFile([
  DOCROOT."music1.mp3",
  DOCROOT."music2.mp3" => "new_dir",
  DOCROOT."music3.mp3" => "new_dir/music"
]);
```

## Set the compression
``` php
$zip->setCompression("my_file.txt", Zip\Zip::CM_DEFLATE);
```

## List of all the zip files
``` php
// All files
$zip->listFiles();

// Filter files in the directory music/
$zip->listFiles("music/");

// Filter files in the directory music/ and image/
$zip->listFiles([
  "music",
  "image"
]);
```

## Open File
``` php
$zip->open("psr.zip", Zip\Zip::CREATE);
```

## Save file changes
``` php
$zip->save();
```

## extract
``` php
$zip->extract(DOCROOT."extracted");
```

## Credits

- [Valdeir Santana](http://www.valdeirsantana.com.br)
- [All Contributors](https://github.com/valdeirpsr/Zip/graphs/contributors)


## License

The MIT License (MIT). Please see [License File](https://github.com/valdeirpsr/Zip/blob/master/LICENSE) for more information.