<?php 

include('./views/includes/content.php');

?>

<div id="block-print" class="container">
                <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group find-form">
                        <input type="text" name="find">
                        <button type="submit">Preview</button>
                    </div>
                 </form>
                <h2>bulletin de paie</h2>
            </div>

            <div id="block-print" class="container">

                <table class="table table-bordered text-center" >
                    <thead>
                        <tr style="background-color:#e91e63;font-size:18px;color:white;">
                            <th colspan="2">Honest Media SARL, App 2 eme<br>
                            Etage Rue Mohamed Zerektouni<br>
                            Impasse Mohamed Azzouzi - <br>
                            Alhoceima//CNSS : 9817810<br>
                            Tel : 0539 84 12 33</th>
                            <th colspan="2">BULLETIEN DE PAIE</th>
                            <th colspan="3">HONEST MEDIA</th>
                        </tr>
                    </thead>
                    <tr style="background-color:#999;color:white">
                        <td colspan="2">Non & Prenom</td>
                        <td colspan="2">Qualification</td>
                        <td>M/H</td>
                        <td>Matricule</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color:#999;color:white">
                        <td colspan="2">Date d'embauche</td>
                        <td>N C.N.S.S</td>
                        <td>Date de Naissance</td>
                        <td>Salaire de base</td>
                        <td>Periode de Paie</td>
                    </tr>
                    <tr>
                        <td colspan="2" ></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color:#999;color:white">
                        <td colspan="2">Libelle</td>
                        <td>Base/Nombre</td>
                        <td>Taux</td>
                        <td>A Payer</td>
                        <td>A Retenir</td>
                    </tr>
                    <tr>

                        <td colspan="2">Salaire<br><br>Salaire brut<br><br>Retenue AMO <br><br>Retenue C.N.S.S<br><br>Retenue I.G.R<br><br>Primes</td>
                        <td><?php ?><br><br><?php ?><br><br><?php ?><br><br><?php ?><br><br><?php ?></td>
                        <td>26j<br><br> <br><br>2.26%<br><br>4.48%<br><br>10.00%</td>
                        <td><?php ?></td>
                        <td><br><br> <br><br><?php ?><br><br><?php ?><br><br><?php ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"> </td>
                    </tr>
                    <tr style="background-color:#999;color:white">
                        <td>Cuml J</td>
                        <td>Cuml base conges</td>
                        <td colspan="2" style="background-color:white;border:none;"></td>
                        <td>Cuml Gains</td>
                        <td>Cuml Retenue</td>
                    <tr >
                        <td>26.00</td>
                        <td>0.00</td>
                        <td colspan="2" style="background-color:white;border:none;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2"  colspan="4">Paye Par Virement</td>
                        <td>Signature</td>
                        <td>Net a paye</td>
                        
                    </tr> 
                    <tr>
                        <td> </td>
                        <td></td>  
                    </tr>                
                </table>
            </div><!--end div -->