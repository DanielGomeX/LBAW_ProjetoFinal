{include file='common/head.tpl'}
	<title>MarKnad - Loja Online Informática</title>
</head>

<body>
	<!-- navbar + banner -->
	<div class="header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
		<!-- banner -->
		<div class="banner">
			<div class="signing text-right">
				<div class="container">
					<div class="sign-in">
						{if isset($username)}
						<a href="{$BASE_URL}actions/users/logout.php">Log Out</a>
					{else}
    				<a href="{$BASE_URL}pages/view_signin.php">Aceda ao nosso site</a>
    				{/if}
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="banner-info text-center">
				<i class="shipping"></i>
				<h3>Loja Informática online</h3>
				<p>Se pretende adquirir algum produto eletrónico, não hesite em comprar na Marknad.</p>
				<a href="{$BASE_URL}pages/view_products.php?page_name=All">Todos os Produtos</a>
			</div>
		</div><!-- closes banner -->
	</div><!-- closes navbar + banner -->
	
	<!-- Top vendas	-->	
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-center">
				<h3><span>Top</span> Vendas</h3>
				<p>Os produtos mais vendidos</p>
			</div>
			<div class="recommand-section-grids">
				<div class="standards">						
					<div class="standard_content">
						<!-- 1st product -->
						
						<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1">{$top[0].nome}</h3>
				  			<!--<p class="m_2">{$cat.nome}</p>-->
							<a href="{$BASE_URL}pages/view_single.php?produto={$top[0].nome}">
			         			<div class="grid_img">
					   				<div class="css3"><img src="{$BASE_URL}{$top[0].caminho}" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price">{$top[0].preco}€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>


						<!-- 2nd product -->
						
						<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1">{$top[1].nome}</h3>
				  			<!--<p class="m_2">{$cat.nome}</p>-->
							<a href="{$BASE_URL}pages/view_single.php?produto={$top[1].nome}">
			         			<div class="grid_img">
					   				<div class="css3"><img src="{$BASE_URL}{$top[1].caminho}" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price">{$top[1].preco}€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>

						<!-- 3rd product -->
							<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1">{$top[2].nome}</h3>
				  			<!--<p class="m_2">{$cat.nome}</p>-->
							<a href="{$BASE_URL}pages/view_single.php?produto={$top[2].nome}">
			         			<div class="grid_img">
					   				<div class="css3"><img src="{$BASE_URL}{$top[2].caminho}" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price">{$top[2].preco}€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>


						<div class="clearfix"></div>