<script type="text/javascript">
function checkNumber(valor) {
  var regra = /^[0-9]+$/;
  if (valor.match(regra)) {
  
  }else{
   var mensagem = document.getElementById("mensagem");
		mensagem.innerHTML = "Valor entre 0 e 999";
  }
};

function selecione(selecao){
	if(selecao == "Selecione..."){
		var mensagem = document.getElementById("mensagem");
		mensagem.innerHTML = "Selecione um tipo";
		}
	}    
</script>

 <form id="resultFiltro" name="add_frm" action="resultFiltro.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<?php
			$consulta="SELECT distinct Type_1 FROM mytable ";
			$executar_consulta = $conexao->query($consulta);
			?>
            <div class="linha">
            <label for="Selecione">Selecione o tipo</label>
                <select name="select" class="form-control" onBlur="selecione(this.value)">
                 <option>Selecione...</option>
                    <?php while($lista = $executar_consulta->fetch_assoc()){ 
                    ?>
                        <option name="select" ><?php echo $lista['Type_1'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="linha">  
            <label for="ataque"> Ataque maior que: </label>
            <input type="text" name="ataque" class="form-control" maxlength="3" size="4" placeholder="" onBlur="checkNumber(this.value)">
           	</div>
           <div class="linha">
           <label for="defesa"> Defesa maior que: </label>
           <input type="text" name="defesa" class="form-control" maxlength="3" size="4" placeholder="" onBlur="checkNumber(this.value)">
            </div>
            <div class="linha">
            <label for="especial"> Especial maior que:</label>
            <input type="text" name="especial" class="form-control" maxlength="3" size="4" placeholder="" onBlur="checkNumber(this.value)">
			</div>
            
            <div id="mensagem" class="alert-danger"></div>
		
        
        <div class="form-group">
			<button type="submit" class="btn btn-primary" >Buscar</button>
		</div>
	</div>	
	</form>
