
{extends file="../templates/home.tpl"}

{block name=content}
<!-- Nav -->
<div id="all" style="background-color: #282828">
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Home</a></li>
					<li><a href="#work">Calc</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
	
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1> <strong>Calculator with smarty </strong></h1>
								
							</header>

						</div>
					</div>
				</div>
			</article>
			
<article id="work" class="wrapper style2">
				<div class="container">
					 <form class="pure-form pure-form-stacked" action="{$app_url}/app/calc_count.php#work" method="get">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="{$form['kwota']}" /><br />
	<label for="id_czas">Czas kredytu: </label>
	<input id="id_czas" type="text" name="czas" value="{$form['czas']}" /><br />
	<label for="id_percent">Oprocentowanie: </label>
	<input id="id_percent" type="text" name="percent" value="{$form['percent']}" /><br />
	<input type = "submit" value="Oblicz" class="pure-button" />
</form>
	
	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


                            
                            {if isset($messages)}
                                {if count($messages) > 0} 
                                    <h4>Wystąpiły błędy: </h4>
                                    <ol class="err">
                                        {foreach  $messages as $msg}
                                            {strip}
                                                <li>{$msg}</li>
                                                {/strip}
                                            {/foreach}
                                    </ol>
                                {/if}
                            {/if}

                         
                            {if isset($result)}
                                <h4>Wynik</h4>
                                <p class="result">
                                    {$result}
                                </p>
                            {/if}

                        </div>

				
			</article>
			</div>
			</div>
			{/block}