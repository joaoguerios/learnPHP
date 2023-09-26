@for($i=0;isset($fornecedores[$i]);$i++)
<p>fornecedor: {{ $fornecedores[$i]['nome'] }}</p>
<p>celeular:{{ $fornecedores[$i]['ddd'] }}
{{ $fornecedores[$i]['telefone'] }}</p>
@switch($fornecedores[$i]['ddd'])
    @case('41')
    <p>curitiba brasil</p>
        @break
    @case(44)
    <p>maringa</p>
        @break
    @default
    <p>outro</p>
@endswitch
<hr>
@endfor

<style>
    body{
        font-family: sans-serif;
        font-size: 20px;
        background-color: aqua;
    }
</style>