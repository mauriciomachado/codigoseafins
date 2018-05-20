$(document).on('click', "#btnEnviarDados", function () {
	
  // pegando os dados
  var vNome = $("#nome").val();
  var vEmail = $("#email").val();
  var vTel = $("#tel").val();
  var vCidade = $("#cidade").val();
  var vCep = $("#cep").val();
  var vEndereco = $("#endereco").val();
  var vServico = $("#servico").val();
  var vDescricao = $("#descricao").val();
  
  
  
 
	
  // criando as variáveis
  var vUrl = "http://nicework.com.br/natanapp/recebe-reserva.php";  /*"ajax.php";*/
  //var vUrlRedirect = "features.html";
  var vData = { nome:vNome, email:vEmail, tel:vTel, cidade:vCidade, cep:vCep, endereco:vEndereco, servico:vServico, descricao:vDescricao };
 
  $.post(
   vUrl, //Required URL of the page on server
   vData,
   function(response,status)
   {
     // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
     if(status == "success")
     {
		 alert( "Solicitação enviada com sucesso! Em breve retornaremos." )
		 
		window.location.href = "http://nicework.com.br/natanapp/#!/features.html"
 
       $("#result").html(
	   //"Solicitação feita com sucesso."
        /* "Nome enviado: " + obj.nome + "<br>" +
         "E-mail enviado: " + obj.email*/
		 
		 
       );
     }    	
   }
  );
});