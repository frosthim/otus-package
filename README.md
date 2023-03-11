# Процессор строк 

Краткое описание проекта 
 
## Установка 

```bash 
$ composer require dgibadullin/otus-composer-package
```
## Использование

```php
<?php 
$processor = new StringProcessor();
echo $processor->getLenght('my string'); // 9
```