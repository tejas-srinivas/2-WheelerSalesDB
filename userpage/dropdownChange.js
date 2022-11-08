function dropdownChange(s1,s2) 
    {
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);

      s2.innerHTML = "";
      if(s1.value == "Access-125")
      {
        var array = ['White|White','Silver|Silver','Black|Black','Wine_Red|Wine Red','Aqua_Green|Aqua Green '];
      }
      else if(s1.value == "Activa-6G")
      {
        var array = ['White|White','Silver|Silver','Black|Black','Red|Red','Yellow|Yellow'];
      }
      else if(s1.value == "Jupiter-125")
      {
        var array = ['White|White','Silver|Silver','Brown|Brown','Blue|Blue','Aqua_Green|Aqua Green'];
      }
      for(var option in array)
      {
        var pair = array[option].split("|");
        var color = document.createElement("option");

        color.value = pair[0];
        color.innerHTML = pair[1];
        s2.options.add(color);
      }
    }