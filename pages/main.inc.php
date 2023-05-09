<main>
        <figure>
            <img src="./asset/a.png" alt="cover php">
            <figcaption>
                <h2>
                    PHP version <?= $_version_php ?>

                </h2>
				<p class="info">
				<?php
				$_hello = "Salut Nicolas";
					function nombre(string $_msg){
							return $_msg;
						}
						print nombre($_hello);
						
				?>
				</p>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?php $_user->dates() ?></h2>
			<p>
				Votre navigateur est : <?= $_navigateur ?><br>
				Votre adress IP est le : <?= $_servername." : ".$_server_addr ?>
				<br>Signature serveur<br>
				
				
			</p>
			<?= $_signature ?> <!-- afficher : print, echo --> 
			<?php
				//print $_signature;
			?>
			<!-- <address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address> -->
		</section>
</main>