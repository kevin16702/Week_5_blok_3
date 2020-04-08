
        <div id='header'>
        <div class="dropdownmenu">
            <div id="menu1" onclick="Dropdownmenu1()">Menu</div>
            <div class="dd-content" id="dropdown1">
                <ul> 
                    <?php
                    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                    ?>
                    <li><a href = '<?php echo $actual_link?>?id=1'> Atlus</a></li>
                    <li><a href = '<?php echo $actual_link?>?id=2'> Persona 3</a></li>
                    <li><a href = '<?php echo $actual_link?>?id=3'>Persona 4</a></li>
                    <li><a href = '<?php echo $actual_link?>?id=4'>Persona 5</a></li>
                </ul>
        </div> 
        </div>
</div>
</div>