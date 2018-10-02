<table border="0" width="100%" id="cabeca" class="load" cellspacing="0" cellpadding="11">
  <tr>
    <td valign="middle" width="85">
    	<div id="logo">
            <img src="img/LOGO-LIGUE-SITE.png">
        </div>
    </td>
    <td>
    	<div id="contLoadingUpLoad">
            <div id="loadingUpLoad">0%</div>
        </div>
    </td>
    <td width="40" valign="middle">
    	<div id="btUpLoad" onclick="$('#inputUpLoad').click()">
    		carregar  
         </div>
         <form action="insereImagem.php?pasta=upLoad&class=contItemLAL" method="post" id="formArq" enctype="multipart/form-data">
        	 <input type="file" style="display: none" name="arquivo[]"  multiple id="inputUpLoad"></input> 
         </form> 
    </td>
    <td width="55" bgcolor="#2e509d">
    	<div id="contBtExibicao">
    		<table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                	<div class="btExi" id="btLAL">
                    	<div class="quadBtExibLAL" style="margin-right: 10%;"></div>
                    	<div class="quadBtExibLAL" style="margin-bottom: 10%;"></div>
                    	<div class="quadBtExibLAL" style="margin-top: 0;"></div>
                    	<div class="quadBtExibLAL" style="margin-left: 10%;"></div>
                    </div>
                </td>
                <td width="11">
                </td>
                <td>
                	<div class="btExi" id="btCas">
                    	<div class="quadBtExibCas" style="margin-bottom: 20%;"></div>
                    	<div class="quadBtExibCas" style="margin-bottom: 20%;"></div>
                    	<div class="quadBtExibCas"></div>
                    </div>
                </td>
              </tr>
            </table>

    	</div>
    </td>
  </tr>
</table>
