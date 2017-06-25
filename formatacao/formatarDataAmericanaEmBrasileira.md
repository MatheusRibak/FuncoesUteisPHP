# Formatar Data Americana em Data Brasileira
É muito comum uma data ser salva no Banco de Dados no formato Americano 'YYYY-MM-DD' e o programador precisar converter a mesma para Brasileira 'DD-MM-YY'.
Para isso podemos usar a seguinte função:

```php
<?php

function formataDataAmericanaEmBrasileira($dataAmericana) {
  return date('d/m/Y',  strtotime($dataAmericana));
}

?>
```

Já para testar o mesmo usamos o seguinte código:

```php
<?php

echo formataDataAmericanaEmBrasileira('1996/11/28');

?>
```

O número que informamos foi '1996/11/28', com a formatação a data retornada será **28/11/1996**
