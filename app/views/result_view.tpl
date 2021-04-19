{extends file="main.tpl"}

{block name=content}
    <div id="all" style="background-color: #7FFFoo">
    <div id="wrapper" style="background-color: #282828">
			<nav id="nav">
				<ul class="container">
                                        <li><a href="{$conf->action_url}results">Wyniki</a></li>
                                        <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
				</ul>
			</nav>
                                </div>
                                <table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            {foreach $credit as $c}
            {strip}
                <tr style="text-align:center;">
                    <td>{$c["idwynik"]}</td>
                    <td>{$c["kwota"]}</td>
                    <td>{$c["czas"]}</td>
                    <td>{$c["procent"]}</td>
                    <td>{$c["rata"]}</td>
                    <td>{$c["data"]}</td>
                </tr>
            {/strip}
            {/foreach}
        </tbody>
    </table>
    </div>
        
                 
			{/block}
                        