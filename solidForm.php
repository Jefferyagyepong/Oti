
        <form action ="insert2.php" method ="post">
  <div class="inline-flex">
    <img src="kma.svg" alt="" width="140" height="145" />
    <?php
    echo "<h1>Oti LandFill Records (Solid waste)</h1>";
    ?>

  </div>


<p class="inline">
<label for "commpanyName">Company Name:</label>
<input type ="text" name ="company_name" id ="companyName" required>
</p> 
<p  class="inline">
<label for "vehType">VEH Type:</label>
<input type ="text" name ="veh_type" id ="vehType" required>
</p> 
<p  class="inline">
<label for "Date">Date:</label>
<input type ="date" name ="date" id ="Date" required>
</p> 
<p  class="inline">
<label for "Time">Time:</label>
<input type ="time" name ="time" id ="Time" required>
</p> 
<p  class="inline">
<label for "Source">Source:</label>
<input type ="text" name ="source" id ="Source" required>
</p> 
<p  class="inline">
<label for "truckNumber">VEH No:</label>
<input type ="text" name ="truck_number" id ="truckNumber" required>
</p> 
<p  class="inline">
    <input type ="submit" value="Submit">
</p>
<br><br><br>

<section>
    <p>
        <a href="liquid.php">Liquid Waste Records</a>
    </p><br><br><br>
     <p>
       <?php include 'logout.php'; ?>
        
    </p>
</section>


</form>
   
