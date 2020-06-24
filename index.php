<DOCTYPE html>
    <html>
    <head>
        <title>Facebook - entre ou cadastre-se</title>
    
        <link rel="icon" type="image/ico" href="img/favicon.ico">
    
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    
        <header>
            <div class="center">
                
                <div class="logo">
                    <h2>facebook</h2>
                </div>

                <form method="post" class="form-login">
                    <div class="form-element">
                        <p>E-mail ou telefone</p>
                        <input type="email">
                    </div>
    
                    <div class="form-element">
                        <p>Senha</p>
                        <input type="password">
                    </div>
    
                    <div class="form-element">
                        <input type="submit" name="acao" value="Entrar">
                    </div>
                    <div class="forget"><a href="/">Esqueceu a conta?</a></div>
                </form>
                <div class="clear"></div>
            </div>
        </header>

        <section class="main">

            <div class="center">

                <div class="network">
                    <h3>O Facebook ajuda você a se conectar </h3>
                        <h3>e compartilhar com as pessoas que fazem parte</h3>
                        <h3> da sua vida.</h3>

                            <img src="img/facebook-icon.png">
                
                </div>
                
                <div class="account">
                    <h2>Abra uma conta</h2>
                    <p>É rápido e fácil.</p>
                    

                    <form class="create-account">
                        <div class="w50">
                            <input placeholder="Nome" type="text">
                        </div>

                        <div class="w50">
                            <input placeholder="Sobrenome" type="text">
                        </div>

                        <div class="w100">
                            <input placeholder="Celular ou e-mail" type="email">
                        </div>

                        <div class="w100">
                            <input placeholder="Nova senha" type="password">
                        </div>

                        <div class="w100">
                            <h2>Data de nascimento</h2>
                            <select name="nascimento-dia" class="dia">

                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?></select>

                            <select name="nascimento=mes" class="nascimento">
                            <option value="01">Jan  </option>
                            <option value="02">Fev  </option>
                            <option value="03">Mar  </option>
                            <option value="04">Abr </option>
                            <option value="05">Mai  </option>
                            <option value="06">Jun  </option>
                            <option value="07">Jul  </option>
                            <option value="08">Ago  </option>
                            <option value="09">Set  </option>
                            <option value="10">Out  </option>
                            <option value="11">Nov  </option>
                            <option value="12">Dez  </option>
                        
                        </select>

                            <select name="nascimento-ano"  class="nascimento">

                                <?php
                                    for($i = 1960; $i <=2021; $i++){
                                ?>

                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?></select>

                                <div class="clear"></div>
                        </div>
                        
                        <div class="w100">
                            
                            <h2>Gênero</h2>

                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <div class="gender"><h5>Feminino</h5></div>

                            <input type="radio" name="sexo" value="masculino">
                            <div class="gender"><h5>Masculino</h5></div>
                        
                            <input type="radio" name="sexo" value="personalizado">
                            <div class="gender"><h5>Personalizado</h5></div>

                        </div>

                            <div class="clear"></div>
                        </div>
                        
                        <div class="info">
                        <span>Ao clicar em Cadastre-se, você concorda com nossos<a href="/"> Termos, Política de Dados</a><span> e</span><a href="/"> Política de Cookies</a><span>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</span></span>
                        </div>

                        <div class="w100">
                            <input type="submit" name="acao" value="Cadastre-se">
                        </div>

                        <div class="clear"></div>

                        <div class="page">
                            <a href="/">Criar uma Página </a><h5>para uma celebridade, banda ou empresa.</h5>
                        </div>
                        
                    </div>

                </div>

            </form>

                </div>

                <div class="center"></div>

        </div>

        </section>
    
    </body>
    </html>