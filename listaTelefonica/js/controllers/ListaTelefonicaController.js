angular.module("ListaTelefonica", []);
angular.module("ListaTelefonica").controller("ListaTelefonicaController", function ($scope) {
	$scope.app = "Lista Telefonica";
	$scope.contatos = [
		{nome: "Pedro", telefone: "99998888", data: new Date (), operadora: {nome: "Oi", codigo: 14, categoria: "Celular"} , cor: "blue"},
		{nome: "João", telefone: "77778866", data: new Date (), operadora: {nome: "Vivo", codigo: 15, categoria: "Celular"} , cor: "yellow"},
		{nome: "Maria", telefone: "99995555", data: new Date (), operadora: {nome: "Tim", codigo: 41, categoria: "Celular"} , cor: "red"}

	];

	$scope.operadoras = [

		{nome: "Oi", codigo: 14, categoria: "Celular", preco: 2},
		{nome: "Vivo", codigo: 15, categoria: "Celular", preco: 1},
		{nome: "Tim", codigo: 41, categoria: "Celular", preco: 4},
		{nome: "GVT", codigo: 25, categoria: "Fixo", preco: 3},
		{nome: "NET", codigo: 11, categoria: "Fixo", preco: 2},

	];

	$scope.addContato = function(contato) {

		$scope.contatos.push(angular.copy(contato));
			delete $scope.contato;
			$scope.contatoForm.$setPristine();

	};

	$scope.apagarContatos = function (contatos) {
		$scope.contatos = contatos.filter(function (contato){
			if(!contato.selecionado) return contato;
		});
	};
	$scope.isContatoSelecionado = function (contatos){
		return contatos.some(function (contato){
			return contato.selecionado;
		});

	};

	$scope.ordernarPor = function (campo){
		$scope.criterioDeOrdenacao = campo;
		$scope.direcaoDaOrdenacao = !$scope.direcaoDaOrdenacao;
	};	

});