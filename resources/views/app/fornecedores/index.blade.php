{{--Comentário--}}
{{-- <h3>Fornecedores</h3> --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3>Existem {{count($fornecedores)}} </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos Fornecedores </h3>
@else
    <h3>nenhum registros</h3>
@endif --}}
{{-- <ul>
    @foreach ($fornecedores as $key => $item)
    <li><h1>{{ $item }} {{$key}} </h1>  </li>        
    @endforeach
</ul> --}}

{{-- @isset($fornecedores)
    <h1>O array contem informações inportantes</h1>
@endisset

@unless (count($fornecedores) < 1)
    <h3>O array nao está vazio</h3>    
@endunless --}}

{{-- @empty($fornecedores)
    vazio
    
@endempty --}}
@isset($fornecedores)
    {{-- @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj']}} 
        <br>
        <hr>        
    @endfor --}}
    {{-- @forelse ($fornecedores as $item)
        Fornecedor: {{$item['nome']}}
        <br>
        CNPJ: {{$item['cnpj']}} 
        <br>
        <hr> 
        
    @empty
        Nenhum dado
        
    @endforelse --}}

    @foreach ($fornecedores as $item)
        {{$loop->first}} {{-- retorna true se for o primeiro indice--}}
        {{$loop->last}} {{-- Retorna true se for o ultimo indice--}}
        {{$loop->count}} {{--Retorna a contagem de registros--}}
        Fornecedor: {{$item['nome']}}
        <br>
        CNPJ: {{$item['cnpj']}} 
        <br>
        <hr>
    @endforeach
    
@endisset