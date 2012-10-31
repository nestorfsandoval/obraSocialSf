<br><br><br><br>
<p id="texto_principal"><font size="6">Alta de Afiliado</font></p>
    <div class="texto">
            <form name="formulario" id="formulario" action="" method="POST">
            Apellido y Nombres: <input type="text" name="apeNom" size="30" value='<?php if( !empty($postValido ['apeNom'])){echo $postValido['apeNom'];}?>' />
            </br>
            </br>
            Domicilio: <input type="text" name="calle" id="calle" value=''/>
            Nro.<input type="text" name="altura" size="1" value=''/>
            Piso <input type="text" name="piso"size="1" value='' />
            Dpto.<input type="text" name="depto" size="1"value='' />
            </br>
            Localidad: <input type="text" name="localidad" size="10" value=''/>
            
            Telefono: <input type="text" name="telefono" size="10" value=''/>
           <!--</br></br></br>
            Reparticion: <input type="text" name="reparticion"/>
            </br>-->
          
            Fecha de ingreso a la administracion Publica: <input type="text" name="fechaIn" id="fechaIn" size="12" value='' />
            </br></br></br>
            Documento de Identidad: Tipo<select name="tipoDoc">
                <option value="">-----</option>
                <option value="1">DNI</option>
                <option value="2">LE</option>
                <option value="3">CI</option>
            </select>    
            Nro.<input type="text" name="nroDoc"/>
            </br>
            Sexo: <select name="sexo">
                        <option value="">---------</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                  </select>     
            </br>
            
            Fecha de Nacimiento: <input type="text" name="fecha" value="aaaa/mm/dd" id="fecha" size="12" />
                     
            
            Estado Civil:<select name="estadoCivil">
                <option>----------</option>            
                <option value="1" >Soltero</option>
                <option value="2">Viudo</option>
                <option value="3">Separado</option>
                <option value="4">Casado</option>
                <option value="5">Concubino</option>
            </select>
           
            <div>
                <input type="submit" value="Guardar" name="modo"/> <input type="reset" value="Reset" />
            </div>
        </form>
    </div>