<?php
  include 'data.php';
  echo "<link rel='stylesheet' type='text/css' href='stil.css'>";

  function date_trans($datum) {
    $a = explode('-', $datum);

    return "$a[2].$a[1].$a[0].";
  }

  function napravi_red($redni, $niz) {
    $niz['datum'] = date_trans($niz['datum']);

    echo "<tr><td>$redni.</td>
          <td>".$niz['prezime']."</td>
          <td>".$niz['ime']."</td>
          <td>".$niz['datum']."</td>
          <td><select autocomplete='off'>";

    if ($niz['placeno'] === 'Da') 
      echo "<option selected='selected' value='da'>Da</option>
            <option value='ne'>Ne</option>";
    else 
      echo "<option value='da'>Da</option>
            <option selected='selected' value='ne'>Ne</option>";

    echo "</select></td></tr>";
  }

  echo '<table width="800">
          <tr>
            <th>Rbr.</th>
            <th>Prezime</th>
            <th>Ime</th>
            <th>Datum prijave</th>
            <th>Plaćeno</th>
          </tr>';

  foreach($data as $key => $value) napravi_red($key + 1, $value);

  echo '</table>';
?>
