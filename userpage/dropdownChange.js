function dropdownChange(s1,s2) 
    {
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);

      s2.innerHTML = "";
      if(s1.value == "Access-125")
      {
        var array = ['White|White','Silver|Silver','Black|Black','Wine_Red|Wine Red','Aqua_Green|Aqua Green '];
        document.getElementById('img').src="../userpage/Access-125.png";
      }
      else if(s1.value == "Activa-6G")
      {
        var array = ['Black|Black','Red|Red','Yellow|Yellow','White|White','Silver|Silver'];
        document.getElementById('img').src="../userpage/Activa-6G.png";
      }
      else if(s1.value == "Jupiter-125")
      {
        var array = ['Blue|Blue','Aqua_Green|Aqua Green','White|White','Silver|Silver','Brown|Brown'];
        document.getElementById('img').src="../userpage/Jupiter-125.png";
      }
      else if(s1.value == "Aprila")
      {
        var array = ['Nero|Nero','Red|Red','Glossy-White|Glossy-White','Grey|Grey','Matte-Black|Matte-Black'];
        document.getElementById('img').src="../userpage/aprila-.png";
      }
      else if(s1.value == "Ntorq")
      {
        var array = ['Metallic red|Metallic red ','Steath black|Steath black','Marine Blue|Marine blue','Neon|Neon','Ligthning Grey|Lightning Grey'];
        document.getElementById('img').src="../userpage/ntorq.png";
      }
      else if(s1.value == "Dio")
      {
        var array = ['Sporths Red|Sports red','Mat Axis Grey |Mat Axis grey','Matte Marvel Blue|Matte Marvel Blue','Strontium Silver|Strontium Silver','Vibrant orange|Vibrant orange'];
        document.getElementById('img').src="../userpage/dio.png";
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