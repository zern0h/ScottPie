
<?php
if(isset($_POST['btn1'])) {
    include('compute.php');
} else if(isset($_POST['btn2'])) {
    include('uploadCompute.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){
    const column0 = <?php echo json_encode($beh); ?>;
    const column1 = <?php echo json_encode($str_arrA); ?>;
    const column2 = <?php echo json_encode($str_arrB); ?>;
    const column3 = <?php echo json_encode($new_arrA); ?>;
    const column4 = <?php echo json_encode($new_arrB); ?>;
    const column5 = <?php echo json_encode($ru_result); ?>;
    const column6 = <?php echo json_encode($new_totalAv); ?>;


    var bodyString = '';
    $.each(column0, function(index, column0) {
        bodyString += ('<tr><td>'+column0+'</td><td>'+column1[index]+'</td><td>'+column2[index]+'</td><td>'+column3[index]+'</td><td>'+column4[index]+'</td><td>'+column5[index]+'</td><td>'+column6[index]+'</td></tr>');
    });
    $('.column0 tbody').html(bodyString);
    
    });
</script>


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>
    <div class=container>
    <div class=table-responsive>
  <table id="export_tab" class="table table-striped table-bordered table-condensed text-center column0">
      <thead>
          <tr><th>\[{\text{Behaviour}}\]</th><th>\[{\text{Observation A}}\]</th><th>\[{\text{Observation B}}\]</th><th>\[{\text{% Observation A}}\]</th><th>\[{\text{% Observation B}}\]</th><th>\[{\text{%}|ObsA-ObsB|}\]</th><th>\[{\text{Avg % Difference}}\]</th>
      </thead>
      <tbody></tbody>
      <tfoot>
    <tr>
      <td>SUM</td>
      <td><?php print_r($totalA); ?></td>
      <td><?php print_r($totalB); ?></td>
      <td><?php print_r($total_arrA); ?></td>
      <td><?php print_r($total_arrB); ?></td>
      <td><?php print_r($absDiff); ?></td>
      <td><?php print_r($p_expected); ?></td>

    </tr>
  </tfoot>
  </table>
  </div>
  </div>
</body>
</html>

<?php  include 'solutions.php' ?>


