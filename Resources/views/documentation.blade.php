@extends('portal::layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card bg-light">
					<div class="card-header">Informações iniciais</div>
					<div class="card-body">
						<p class="card-text">
							No Portal online da Scancode, poderá preparar seu sistema para o ambiente de produção (feira), de forma que o sistema trabalhe com dados integros e sem corromper o sistema.
							Aqui no portal poderá validar os seu sistema ERP de forma que corresponde eficientemente com o nosso sistema, com esta documentação será demonstrado a estrutura necessária para a importação e como estas dados devem ser formatados.
						</p>
						<a href="{{ route('portal.doc.download.sample', $client_validation) }}" class="btn btn-primary">Arquivo de transportadora com exemplos</a>
					</div>
				</div>
				<h1 class="mb-3">Validação de Transportadora</h1>
				<ul>
					<li class="mb-2"><span class="font-weight-bold">Extensão do Arquivo:</span> Os arquivos devem ter o formato de planiha Excel Micorsoft Word com a extensção "xlsx"</li>
					<li class="mb-2">
						<span class="font-weight-bold">Primeira Linha:</span> A primeira linha do arquivo será o <span class="font-weight-bold">cabeçalho</span>, cada coluna conterá um cabeçalho indicando uma determinada propriedade da transportadora. Atenção quanto a formalização do cabeçalho, todao cabeçalho segue a formatação <i>snake case</i>, isto é letras são em minúsculas é permitido número e cabeçalho com palavras duplas são separadas por underscore "_".
					</li>
					<li class="mb-2"><span class="font-weight-bold">Linhas de registro:</span> Após o cabeçalho, toda linha representará um registro único do seu pagamento, não há um número limite de transportadoras para o arquivo, coloque quantos transportadoras forem necessários, preenchendo de acordo com co cabeçalho.</li>
					<li class="mb-2"><span class="font-weight-bold">Formatação:</span> Toda coluna segue uma determinada formatação, podendo ser alfanúmerica, numérico, número inteiro ou apenas números positivos e até mesmo formatação de data.</li>
				</ul>
				<hr>
				<h1 class="mb-3">Colunas do Cabeçalho</h1>
				<p>
					A seguir é listado todas as colunas com seus respectivos cabeçalhos com as formatações necessárias e propriedades.
				</p>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="font-weight-bold">codigo</span> - [obrigatório, não pode ser vazio, inteiro, valor mínimo 1, único para cada registo]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">descricao</span> - [obrigatório, não pode ser vazio, texto, máximo 255 caracteres, único para cada registo]
					</li>
				</ul>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('portal.dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('portal.main', 1) }}">Painel Central - Importar e Validar</a>
</li>
<li class="breadcrumb-item text-capitalize">Documentação de {{ $client_validation->validation->alias }}</li>
@endsection