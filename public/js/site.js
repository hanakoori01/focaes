//Paginacion para el datatable
$(document).ready(function () {
  $('#DataTable').DataTable({
    "language": {
      "url": "/json/Spanish.json"
    },
    "aLengthMenu": [[10, 20, 30, 50, 75, -1], [10, 20, 30, 50, 75, "All"]],
    "pageLength": 10,

  });
});

$(document).ready(function () {
  $('#DataTableUni').DataTable({
    "language": {
      "url": "/json/Spanish.json"
    },
    "aLengthMenu": [[10, 20, 30, 50, 75, -1], [10, 20, 30, 50, 75, "All"]],
    "pageLength": 10,

  });
});

$(document).ready(function () {
  $('#DataTableSo').DataTable({
    "language": {
      "url": "/json/Spanish.json"
    },
    "aLengthMenu": [[10, 20, 30, 50, 75, -1], [10, 20, 30, 50, 75, "All"]],
    "pageLength": 10,

  });
});

$(document).ready(function () {
  $('#DataTableBene').DataTable({
    "language": {
      "url": "/json/Spanish.json"
    },
    "aLengthMenu": [[10, 20, 30, 50, 75, -1], [10, 20, 30, 50, 75, "All"]],
    "pageLength": 10,

  });
});


//Inicio de el wizard de proyectos
var registrationForm = $('#registration');
var formValidate = registrationForm.validate({
  errorClass: 'is-invalid',
  errorPlacement: () => false
});

const wizard = new Enchanter('registration', {}, {
  onNext: () => {
    if (!registrationForm.valid()) {
      formValidate.focusInvalid();
      return false;
    }
  }
});

//Finalizar creacion de proyecto
$('#btnFinalizar').on('click', () => {
  var form = new FormData;
  form.append("CodigoSia", $("#CodigoSia").val());
  form.append("Titulo", $("#Titulo").val());
  form.append("AnnoInicio", $("#AnnoInicio").val());
  form.append("Vigencia", $("#Vigencia").val());
  form.append("TipoProyecto", $("#TipoProyecto").val());
  form.append("CantEstVinculadosSede", $("#CantEstVinculadosSede").val());
  form.append("CantEstVinculadosOtros", $("#CantEstVinculadosOtros").val());
  form.append("AreaInfluencia", $("#AreaInfluencia").val());
  form.append("Estado", $("#Estado").val());

  var ChecksAca = document.getElementsByClassName("CheckBoxAca");
  var NChecksAca = ChecksAca.length;
  var TipoAca =  document.getElementsByClassName("TipoAca");

  var CheckBoxUni = document.getElementsByClassName("CheckBoxUni");
  var NCheckBoxUni = CheckBoxUni.length;

  var CheckBoxSoc = document.getElementsByClassName("CheckBoxSoc");
  var NCheckBoxSoc = CheckBoxSoc.length;

  var NombreBene = document.getElementsByClassName('NombreBene');
  var TipoBene = document.getElementsByClassName('TipoBene');
  var ClasiBene = document.getElementsByClassName('ClasiBene');
  var CantBeneHombres = document.getElementsByClassName('CantBeneHombres');
  var CantBeneMujeres = document.getElementsByClassName('CantBeneMujeres');
  var CantBeneFamilia = document.getElementsByClassName('CantBeneFamilia');
  var CantBeneTotal = document.getElementsByClassName('CantBeneTotal');

  var NombreFinanciamiento = document.getElementsByClassName('NombreFina');
  var TipoFinanciamiento = document.getElementsByClassName('TipoFinanciamiento');
  var InstitucionFina = document.getElementsByClassName('InstitucionFina');
  var CantidadFinanciamiento = document.getElementsByClassName('CantidadFinanciamiento');

  var ARES = document.getElementById('ARES').value;
  var OVDE = document.getElementById('OVDE').value;
  var InstanciaNacional = document.getElementById('InstanciaNacional').value;
  var InstanciaInternacional = document.getElementById('InstanciaInternacional').value;
  var PresupuestoTotal = document.getElementById('PresupuestoTotal').value;


  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/Proyectos/create',
    data: form,
    contentType: false,
    processData: false,
    dataType: 'json'
  });


  for (var i = 0; i < NChecksAca; i++) {
    if (ChecksAca[i].checked === true) {
      var formAca = new FormData;
      formAca.append("CodigoSia", $("#CodigoSia").val());
      formAca.append("IdAcademico", ChecksAca[i].id);
      formAca.append("TipoAcademico", TipoAca[i].value);
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/AcademicoProyecto/create',
        data: formAca,
        contentType: false,
        processData: false,
        dataType: 'json'
      });
    }
  }

  for (var x = 0; x < NCheckBoxUni; x++) {
    if (CheckBoxUni[x].checked === true) {
      var formUni = new FormData;
      formUni.append("CodigoSia", $("#CodigoSia").val());
      formUni.append("IdUniversidad", CheckBoxUni[x].id);

      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/UniversidadProyecto/create',
        data: formUni,
        contentType: false,
        processData: false,
        dataType: 'json'
      });
    }
  }

  for (var y = 0; y < NCheckBoxSoc; y++) {
    if (CheckBoxSoc[y].checked === true) {
      var formSo = new FormData;
      formSo.append("CodigoSia", $("#CodigoSia").val());
      formSo.append("IdSocio", CheckBoxSoc[y].id);
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/SocioProyecto/create',
        data: formSo,
        contentType: false,
        processData: false,
        dataType: 'json'
      });
    }
  }

  for (var z = 0; z < NombreBene.length; z++) {
    var formBene = new FormData;
    formBene.append("NombreBeneficiario", NombreBene[z].textContent);
    formBene.append("CodigoSia", $("#CodigoSia").val());
    formBene.append("TipoBeneficiario", TipoBene[z].textContent);
    formBene.append("Clasificacion", ClasiBene[z].textContent);
    formBene.append("CantBeneFamilia",CantBeneFamilia[z].textContent);
    formBene.append("CantBeneMujeres",CantBeneMujeres[z].textContent);
    formBene.append("CantBeneHombres", CantBeneHombres[z].textContent);
    formBene.append("CantBeneTotal", CantBeneTotal[z].textContent);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: '/Beneficiario/create',
      data: formBene,
      contentType: false,
      processData: false,
      dataType: 'json'
    });
  }

  for (var a = 0; a < NombreFinanciamiento.length; a++) {
    var formFina = new FormData;
    formFina.append("CodigoSia", $("#CodigoSia").val());
    formFina.append("NombreFinanciamiento", NombreFinanciamiento[a].textContent);
    formFina.append("TipoFinanciamiento", TipoFinanciamiento[a].textContent);
    formFina.append("Institucion", InstitucionFina[a].textContent);
    formFina.append("Cantidad", CantidadFinanciamiento[a].textContent);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: '/Financiamiento/create',
      data: formFina,
      contentType: false,
      processData: false,
      dataType: 'json'
    });
  }

  var formPresu = new FormData;
  formPresu.append("CodigoSia", $("#CodigoSia").val());
  formPresu.append("ARES", ARES);
  formPresu.append("OVDE", OVDE);
  formPresu.append("InstanciaNacional",InstanciaNacional);
  formPresu.append("InstanciaInternacional", InstanciaInternacional);
  formPresu.append("PresupuestoTotal", PresupuestoTotal);
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/Presupuesto/create',
    data: formPresu,
    contentType: false,
    processData: false,
    success: function(data){
      console.log(data);
      window.location.href = "/Proyectos";
    },
    error: function(data){
      console.log(data);
    } 
  });
});



//Asincronicas para academicos
$('#btnSaveAca').on('click', () => {
  var form = new FormData;
  form.append("Nombre", $("#NombreAca").val());
  form.append("Apellido1", $("#Apellido1Aca").val());
  form.append("Apellido2", $("#Apellido2Aca").val());

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/Proyectos/storeAcademico',
    data: form,
    contentType: false,
    processData: false,
    dataType: 'json'
  });
  document.getElementById('CloseAca').click();
  $("#listAcademico").load( "/Proyectos/listAcademico" );
  $("#NombreAca").val("");
  $("#Apellido1Aca").val("");
  $("#Apellido2Aca").val("")
});

//Asincronicas para Universidad
$('#btnSaveUni').on('click', () => {
  var form = new FormData;
  form.append("NombreUni", $("#NombreUni").val());
  form.append("TipoUni", $("#TipoUni").val());

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/Proyectos/storeUniversidad',
    data: form,
    contentType: false,
    processData: false,
    dataType: 'json'
  });
  document.getElementById('CloseUni').click();
  $("#listUniversidad").load( "/Proyectos/listUniversidad" );
  $("#NombreUni").val("");
  $("#TipoUni").val("Tipo de Universidad...");
});


//Asincronicas para socio
$('#btnSaveSocio').on('click', () => {
  var form = new FormData;
  form.append("NombreSocio", $("#NombreSocio").val());
  form.append("TipoSocio", $("#TipoSocio").val());

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/Proyectos/storeSocio',
    data: form,
    contentType: false,
    processData: false,
    dataType: 'json'
  });
  document.getElementById('CloseSocio').click();
  document.getElementById('iframeSocio').contentWindow.location.reload(true);

  $("#NombreSocio").val("");
  $("#TipoSocio").val("Tipo de Socio...");
});

//Manejo de Beneficiarios
let IdBeneficiario = 0;
$("#btnAgregarBene").on("click", () => {
  IdBeneficiario++;
  var NombreBeneficiario = document.getElementById("NombreBeneficiario").value;
  var Tipo = document.getElementById("TipoBeneficiario");
  var TipoBeneficiario = Tipo.options[Tipo.selectedIndex].text;
  var Clasi = document.getElementById("ClasificacionBeneficiario");
  var ClasificacionBeneficiario = Clasi.options[Clasi.selectedIndex].text;
  var CantBeneHombres = document.getElementById("CantBeneHombres").value;
  var CantBeneMujeres = document.getElementById("CantBeneMujeres").value;
  var CantBeneFamilia = document.getElementById("CantBeneFamilia").value;
  var CantBeneTotal = document.getElementById("CantBeneTotal").value;

  document.getElementById("tablaBeneficiario").insertRow(-1).innerHTML =
    '<tr><td id="' + IdBeneficiario + '" class="IdBeneficiario">' + IdBeneficiario
    + '</td><td class="NombreBene">' + NombreBeneficiario
    + '</td><td class="TipoBene">' + TipoBeneficiario
    + '</td><td class="ClasiBene">' + ClasificacionBeneficiario
    + '</td><td class="CantBeneHombres" hidden>' + CantBeneHombres
    + '</td><td class="CantBeneMujeres" hidden>' + CantBeneMujeres
    + '</td><td class="CantBeneFamilia" hidden>' + CantBeneFamilia
    + '</td><td class="CantBeneTotal">' + CantBeneTotal + '</td></tr>';

  document.getElementById("NombreBeneficiario").value = "";
  Tipo.selectedIndex = 0;
  Clasi.selectedIndex = 0;
  document.getElementById("CantBeneHombres").value = "";
  document.getElementById("CantBeneMujeres").value = "";
  document.getElementById("CantBeneFamilia").value = "";
  document.getElementById("CantBeneTotal").value = "";
});

$("#btnEliminarBene").on("click", () => {
  var table = document.getElementById("tablaBeneficiario");
  var rowCount = table.rows.length;
  //console.log(rowCount);

  if (rowCount <= 1)
    alert('No se puede eliminar el encabezado');
  else
    table.deleteRow(rowCount - 1);
  IdBeneficiario--;
});

//Manejo financiamiento
let IdFinanciamiento = 0;
$("#btnAgregarFina").on("click", () => {
  IdFinanciamiento++;
  var NombreFina = document.getElementById("NombreFinanciamiento").value;
  var Tipo = document.getElementById("TipoFinanciamiento");
  var TipoFinanciamiento = Tipo.options[Tipo.selectedIndex].text;
  var Inst = document.getElementById("Institucion");
  var Institucion = Inst.options[Inst.selectedIndex].text;
  var CantidadFinanciamiento = document.getElementById("CantidadFinanciamiento").value;

  document.getElementById("tablaFinanciamiento").insertRow(-1).innerHTML =
    '<tr><td id="' + IdFinanciamiento + '" class="IdFinanciamiento">' + IdFinanciamiento
    + '</td><td class="NombreFina">' + NombreFina
    + '</td><td class="TipoFinanciamiento">' + TipoFinanciamiento
    + '</td><td class="InstitucionFina">' + Institucion
    + '</td><td class="CantidadFinanciamiento">' + CantidadFinanciamiento + '</td></tr>';

  $('#NombreFinanciamiento').val('');
  $('#CantidadFinanciamiento').val('');
  Tipo.selectedIndex = 0;
  Inst.value = "";
  
});

$("#btnEliminarFina").on("click", () => {
  var table = document.getElementById("tablaFinanciamiento");
  var rowCount = table.rows.length;
  //console.log(rowCount);

  if (rowCount <= 1)
    alert('No se puede eliminar el encabezado');
  else
    table.deleteRow(rowCount - 1);
  idSocio--;
});