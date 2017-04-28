# Formatar Número em Real
É muito comum um número vir do baco como '1000', '10', '350.97', e você precisar formatá-lo para real.
Para isso podemos usar a seguinte função:

```php
<?php

function formataReal($valor) {
  return "R$ " . number_format($valor, 2, ",", ".");
}

?>
```

Já para testar o mesmo usamos o seguinte código:

```php
<?php

echo formataReal('350.87');

?>
```

O número que informamos foi 350.87, com a formatação o valor retornado será **R$ 350,87.**  
