

<!DOCTYPE html>
<html>

    <head> 
        <title>Nový kurz </title> 
        
    </head>
 
    <body>
        <div><br>&nbsp</div>
        <div><br>&nbsp</div>


        <div class="container">	
            <form method="post" action="http://localhost/Prihlasovani/index.php/auth/save">
                <h4 style="text-align: center">Vytvoření kurzu</h4>
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Název knihy</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" required name="nazev_knihy">
                        </div>
                    </div>      


                    <div class="col-md-6">
                        <label>Autor</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" required name="autora">
                        </div> 
                    </div>
                </div>

                        <label>Období</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="number" min="1" max="4" class="form-control" required name="kategorie_idkategorie">
                        </div> 
                        <div>1... Světová a česká literatura do konce 18. století </div>
                        <div>2... Světová a česká 19. století </div>
                        <div>3... Světová literatura 20. a 21. století </div>
                        <div>4... Česká literatura 20. a 21. století </div>





                <div style="text-align: left">
                    <button type="submit" name="register" class="btn btn-primary">Odeslat</button>
                </div>
                
            </form>


        </div>



    </body>
</html>