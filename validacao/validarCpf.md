# Realizar a Validação de um CPF
Em quase todo site que criamos pedimos ao nosso usuario para informar o seu CPF, muitos tentam ser "engraçadinhos" e tentam informar um CPF inválido. Aqui realizamos a validação do mesmo.
Para isso podemos usar a seguinte função:

**Explicação:** Primeira retiramos toda a possível máscara que o programador possa ter colocado. Depois já fazemos a eliminação dos CPFs falsos mais utilizados. E após fazemos a conta para verificar se realmente é um CPF válido.

```php
<?php

function validarCpf($cpf) {
  $cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);

  if (strlen($cpf) != 11 ||
  $cpf == '00000000000' ||
  $cpf == '11111111111' ||
  $cpf == '22222222222' ||
  $cpf == '33333333333' ||
  $cpf == '44444444444' ||
  $cpf == '55555555555' ||
  $cpf == '66666666666' ||
  $cpf == '77777777777' ||
  $cpf == '88888888888' ||
  $cpf == '99999999999') {
    return "O Cpf informado é inválido!!!";
  } else {
    for ($t = 9; $t < 11; $t++) {
      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cpf{$c} * (($t + 1) - $c);
      }

      $d = ((10 * $d) % 11) % 10;
      if ($cpf{$c} != $d) {
        return "O Cpf informado é inválido!!!";
      }
    }
    return "O Cpf informado é válido!!!";
  }
}

?>
```

Já para testar usamos o seguinte código:



```php
<?php

echo validarCpf('00000000000');

?>
```

O número que informamos é um CPF inválido. Logo a mensagem que vai surgir vai ser **O CPF informado é válido!!!**. Você pode testar com outros CPFs inválidos para verificar, ou usar o seu para ver que está funcionando corretamente!
