<script type="text/javascript">
$(document).ready(function()
{	
	alert('working');
	function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#ruaCli").val("");
        $("#baiCli").val("");
        //$("#clienteCidade").val("");
        $("#ufCli").val("");
        
    }
    
    //Quando o campo cep perde o foco.
    $("#cepCli").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#ruaCli").val("...");
                $("#baiCli").val("...");
                //$("#clienteCidade").val("...");
                $("#ufCli").val("...");
                //$("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#ruaCli").val(dados.logradouro);
                        $("#baiCli").val(dados.bairro);
                        //$("#clienteCidade").val(dados.localidade);
                        $("#ufCli").val(dados.uf);
                        //$("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>	



  <div class="col-lg-6">
	  
           <div class="panel panel-default">
           
                 <div class="panel-heading">
                 Clientes 
 </div>
		<div class="panel-body">
		
           <div class="row">
           <form action='/cliente/gravar' method="post">
      		<div class="form-group">
                <label>Codigo</label>
                 <input class="form-control" id="id" type='numeric' readonly name="codCli" value="<?php echo $usr[0]['Idade'] ?? '';?>" placeholder="Id Automático">
			</div>
            <div class="form-group">
            <label>Nome</label>
            	<input class="form-control" id="nomCli" type='text' required name="nomCli" value="<?php echo $usr[0]['Nome'] ?? '';?>">
			</div>
			<div class="form-group">
			<label>Cep</label>
				<input class="form-control" id="cepCli" type='numeric' required name="cepCli" value="<?php echo $usr[0]['Email'] ?? '' ;?>">
			</div>
			<div class="form-group">
            	<label>Uf</label>
					<input class="form-control" id="ufCli" type='text' required name="ufCli" value="<?php echo $usr[0]['Celular'] ?? '' ;?>">
			</div>
            <div class="form-group">
            	<label>Bairro</label>
                <input class="form-control" id="baiCli" type='text' required name="baiCli" value="<?php echo $usr[0]['Celular'] ?? '' ;?>">
            </div>
			<div class="form-group">
            		<label>Rua</label>
                   	<input class="form-control" id="ruaCli" type='text' required name="ruaCli" value="<?php echo $usr[0]['Celular'] ?? '' ;?>">
             </div>
             	<div class="form-group">
             	<input type="submit" class='btn btn-success' value='Gravar'>
             	<input type="reset" class='btn btn-danger' value='Limpar'>
             	 </div>
             	 </form>       
</div>                                        
</div>
</div>


