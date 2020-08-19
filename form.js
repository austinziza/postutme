function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['demoForm'].elements['category'].onchange = function(e) {
    // name of associated select list
    var relName = 'choices[]';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'choices[]': {
        
        // names match option values in controlling select list
		"":{
		     text:['']
		},
		

        abia: {
            
                // example without values
                text: [ '', 'Aba North','Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala-Ngwa North', 'Isiala-Ngwa South', 'Isuikwato', 'Obi Nwa',' Ohafia',' Osisioma', 'Ngwa',' Ugwunagbo','Ukwa East', 'Ukwa West', 'Umuahia North', 'Umuahia South', 'Umu-Neochi']
             },
			 
			 adamawa: {
            
                
                text: [ '', 'Demsa','Fufore','Ganaye','Gireri','Gombi','Guyuk','Hong','Jada','Lamurde','Madagali','Maiha', 'Mayo-Belwa','Michika','Mubi North','Mubi South','Numan','Shelleng','Song','Toungo','Yola North','Yola South']
             },
			 
			 akwa_ibom: {
            
                
                text: ['','Abak','Eastern Obolo','Eket','Esit Eket','Essien Udim','Etim Ekpo','Etinan','Ibeno','Ibesikpo Asutan','Ibiono Ibom','Ika','Ikono','Ikot Abasi','Ikot Ekpene','Ini','Itu','Mbo','Mkpat Enin','Nsit Atai','Nsit Ibom','Nsit Ubium','Obot Akara','Okobo','Onna','Oron', 'Oruk Anam','Udung Uko','Ukanafun','Uruan','Urue-Offong/Oruko','Uyo']
             },
			 
			  anambra: {
			 text: ['','Aguata','Anambra East','Anambra West','Anaocha','Awka North','Awka South','Ayamelum','Dunukofia','Ekwusigo','Idemili North','Idemili south','Ihiala','Njikoka','Nnewi North','Nnewi South','Ogbaru','Onitsha North','Onitsha South','Orumba North','Orumba South','Oyi' ]
			 },
			 
			 bauchi: {
			 text: ['','Alkaleri','Bauchi','Bogoro','Damban','Darazo','Dass','Ganjuwa','Giade','Itas/Gadau','Jama are','Katagum','Kirfi','Misau','Ningi','Shira','Tafawa-Balewa','Toro','Warji','Zaki' ]
			 },
			 
			 bayelsa: {
			  text: ['','Brass','Ekeremor','Kolokuma/Opokuma','Nembe','Ogbia','Sagbama','Southern Jaw','Yenegoa' ]
			 },
			 
			 benue: {
			  text: ['','Ado','Agatu','Apa','Buruku','Gboko','Guma','Gwer East','Gwer West','Katsina-Ala','Konshisha','Kwande','Logo','Makurdi','Obi','Ogbadibo','Oju','Okpokwu','Ohimini','Oturkpo','Tarka','Ukum','Ushongo','Vandeikya' ]
			 },
			 
			 borno: {
			  text: ['','Abadam','Askira/Uba','Bama','Bayo','Biu','Chibok','Damboa','Dikwa','Gubio','Guzamala','Gwoza','Hawul','Jere','Kaga','Kala/Balge','Konduga','Kukawa','Kwaya Kusar','Mafa','Magumeri','Maiduguri','Marte','Mobbar','Monguno','Ngala','Nganzai','Shani' ]
			 },
			 cross_river: {
			   text: ['','Akpabuyo','Odukpani','Akamkpa','Biase','Abi','Ikom','Yarkur','Odubra','Boki','Ogoja','Yala','Obanliku','Obudu','Calabar South','Etung','Bekwara','Bakassi','Calabar Municipality']
			 },
			 
			 delta: {
			  text: ['','Oshimili','Aniocha','Aniocha South','Ika South','Ika North-East','Ndokwa West','Ndokwa East','Isoko south','Isoko North','Bomadi','Burutu','Ughelli South','Ughelli North','Ethiope West','Ethiope East','Sapele','Okpe','Warri North','Warri South','Uvwie','Udu','Warri Central','Ukwani','Oshimili North','Patani']
			 },
			 
			 ebonyi: {
			      text:['','Afikpo South','Afikpo North','Onicha','Ohaozara','Abakaliki','Ishielu','lkwo','Ezza','Ezza South','Ohaukwu','Ebonyi','Ivo' ]
			 },
			 
			 edo: {
			   text: ['','Esan North-East','Esan Central','Esan West','Egor','Ukpoba','Central','Etsako Central','Igueben','Oredo','Ovia SouthWest','Ovia South-East','Orhionwon','Uhunmwonde','Etsako East', 'Esan South-East' ]
			 },
			 
			 ekiti: {
			    text: ['','Ado','Ekiti-East','Ekiti-West', 'Emure/Ise/Orun','Ekiti South-West','Ikare','Irepodun','Ijero,', 'Ido/Osi','Oye','Ikole','Moba','Gbonyin','Efon','Ise/Orun ','Ilejemeje']
			 },
			 enugu: {
			     text: ['','Enugu South', 'Igbo-Eze South','Enugu North','Nkanu','Udi Agwu','Oji-River','Ezeagu','IgboEze North','Isi-Uzo','Nsukka','Igbo-Ekiti','Uzo-Uwani','Enugu East','Aninri','Nkanu East','Udenu' ]
			 },
			 
			 gombe: {
			     text: ['','Akko','Balanga','Billiri','Dukku','Kaltungo','Kwami','Shomgom','Funakaye','Gombe','Nafada/Bajoga ','Yamaltu/Delta' ]
			 },
			 
			 imo: {
			     text: ['','Aboh-Mbaise','Ahiazu-Mbaise','Ehime-Mbano','Ezinihitte','Ideato North','Ideato South','Ihitte/Uboma','Ikeduru','Isiala Mbano','Isu','Mbaitoli','Mbaitoli','Ngor-Okpala','Njaba','Nwangele','Nkwerre','Obowo','Oguta','Ohaji/Egbema','Okigwe','Orlu','Orsu','Oru East','Oru West','Owerri-Municipal','Owerri North','Owerri West' ]
			 },
			 
			 jigawa: {
			    text: ['','Auyo','Babura','Birni Kudu','Biriniwa','Buji','Dutse','Gagarawa','Garki','Gumel','Guri','Gwaram','Gwiwa','Hadejia','Jahun','Kafin Hausa','Kaugama Kazaure','Kiri Kasamma','Kiyawa','Maigatari','Malam Madori','Miga','Ringim','Roni','Sule-Tankarkar','Taura ','Yankwashi' ]
			 },
			 kaduna: {
			    text: ['','Birni-Gwari','Chikun','Giwa','Igabi','Ikara','jaba','Jema a','Kachia','Kaduna North','Kaduna South','Kagarko','Kajuru','Kaura','Kauru','Kubau','Kudan','Lere','Makarfi','Sabon-Gari','Sanga','Soba','Zango-Kataf','Zaria' ]
			 },
			 
			 kano: {
			   text: ['','Ajingi','Albasu','Bagwai','Bebeji','Bichi','Bunkure','Dala','Dambatta','Dawakin Kudu','Dawakin Tofa','Doguwa','Fagge','Gabasawa','Garko','Garum','Mallam','Gaya','Gezawa','Gwale','Gwarzo','Kabo','Kano Municipal','Karaye','Kibiya','Kiru','kumbotso','Kunchi','Kura','Madobi','Makoda','Minjibir','Nasarawa','Rano','Rimin Gado','Rogo','Shanono','Sumaila','Takali','Tarauni','Tofa','Tsanyawa','Tudun Wada','Ungogo','Warawa','Wudil']
			 },
			 
			 katsina: {
			    text: ['','Bakori','Batagarawa','Batsari','Baure','Bindawa','Charanchi','Dandume','Danja','Dan Musa','Daura','Dutsi','Dutsin-Ma','Faskari','Funtua','Ingawa','Jibia','Kafur','Kaita','Kankara','Kankia','Katsina','Kurfi','Kusada','Mai Adua','Malumfashi','Mani','Mashi','Matazuu','Musawa','Rimi','Sabuwa','Safana','Sandamu','Zango' ]
			 },
			 
			 kebbi: {
			    text: ['','Aleiro','Arewa-Dandi','Argungu','Augie','Bagudo','Birnin Kebbi','Bunza','Dandi ','Fakai','Gwandu','Jega','Kalgo', 'Koko/Besse','Maiyama','Ngaski','Sakaba','Shanga','Suru','Wasagu/Danko','Yauri','Zuru' ]
			 },
			 kogi: {
			    text: ['','Adavi','Ajaokuta','Ankpa','Bassa','Dekina','Ibaji','Idah','Igalamela-Odolu','Ijumu','Kabba/Bunu','Kogi','Lokoja','Mopa-Muro','Ofu','Ogori/Mangongo','Okehi','Okene','Olamabolo','Omala','Yagba East', 'Yagba West']
		           },
		     
			 kwara: {
			   text: ['','Asa','Baruten','Edu','Ekiti','Ifelodun','Ilorin East','Ilorin West','Irepodun','Isin','Kaiama','Moro','Offa','Oke-Ero','Oyun','Pategi' ]
			 },
			 
			 lagos: {
			   text: ['','Agege','Ajeromi-Ifelodun','Alimosho','Amuwo-Odofin','Apapa','Badagry','Epe','Eti-Osa','Ibeju/Lekki','Ifako-Ijaye ','Ikeja','Ikorodu','Kosofe','Lagos Island','Lagos Mainland','Mushin','Ojo','Oshodi-Isolo','Shomolu','Surulere']
			 },
			 
			 nasarawa: {
			       text: ['','Akwanga','Awe','Doma','Karu','Keana','Keffi','Kokona','Lafia','Nasarawa','Nasarawa-Eggon','Obi','Toto','Wamba' ]
			 },
			 
			 niger: {
			     text:['','Agaie','Agwara','Bida','Borgu','Bosso','Chanchaga','Edati','Gbako','Gurara','Katcha','Kontagora ','Lapai','Lavun','Magama','Mariga','Mashegu','Mokwa','Muya','Pailoro','Rafi','Rijau','Shiroro','Suleja','Tafa','Wushishi']
			 },
			 ogun: {
			    text: ['','Abeokuta North','Abeokuta South','Ado-Odo/Ota','Egbado North','Egbado South','Ewekoro','Ifo','Ijebu East','Ijebu North','Ijebu North East','Ijebu Ode','Ikenne','Imeko-Afon','Ipokia','Obafemi-Owode','Ogun Waterside','Odeda','Odogbolu','Remo North','Shagamu']
			 },
			 
			 ondo: {
			    text: ['','Akoko North East','Akoko North West','Akoko South Akure East','Akoko South West','Akure North','Akure South','Ese-Odo','Idanre','Ifedore','Ilaje','Ile-Oluji','Okeigbo','Irele','Odigbo','Okitipupa','Ondo East','Ondo West','Ose','Owo' ]
			 },
			 
			 osun: {
			    text: ['','Aiyedade','Aiyedire','Atakumosa East','Atakumosa West','Boluwaduro','Boripe','Ede North','Ede South','Egbedore','Ejigbo','Ife Central','Ife East','Ife North','Ife South','Ifedayo','Ifelodun','Ila','Ilesha East','Ilesha West','Irepodun','Irewole','Isokan','Iwo','Obokun','Odo-Otin','Ola-Oluwa','Olorunda','Oriade','Orolu','Osogbo']
			 },
			 
			 oyo: {
			  text: ['','Afijio','Akinyele','Atiba','Atigbo','Egbeda','Ibadan Central','Ibadan North','Ibadan North West','Ibadan South East','Ibadan South West','Ibarapa Central','Ibarapa East','Ibarapa North','Ido','Irepo','Iseyin','Itesiwaju','Iwajowa','Kajola','Lagelu Ogbomosho North','Ogbmosho South','Ogo Oluwa','Olorunsogo','Oluyole','Ona-Ara','Orelope','Ori Ire','Oyo East','Oyo West','Saki East','Saki West','Surulere']
			 },
			 plateau: {
			   text: ['','Barikin Ladi','Bassa','Bokkos','Jos East','Jos North','Jos South','Kanam','Kanke','Langtang North','Langtang South','Mangu','Mikang','Pankshin','Qua an Pan','Riyom','Shendam','Wase']
			   },
			   
			   rivers: {
			    text: ['','Abua/Odual','Ahoada East','Ahoada West','Akuku Toru','Andoni','Asari-Toru','Bonny','Degema','Emohua','Eleme','Etche','Gokana','Ikwerre','Khana','Obia/Akpor','Ogba/Egbema/Ndoni','Ogu/Bolo','Okrika','Omumma','Opobo/Nkoro','Oyigbo','Port-Harcourt','Tai' ]
			   },
			   
			   sokoto: {
			      text: ['','Binji','Bodinga','Dange-shnsi','Gada','Goronyo','Gudu','Gawabawa','Illela','Isa','Kware','kebbe','Rabah','Sabon birni','Shagari','Silame','Sokoto North','Sokoto South','Tambuwal','Tqngaza','Tureta','Wamako','Wurno','Yabo']
			   },
			   taraba: {
			      text: ['','Ardo-kola','Bali','Donga','Gashaka','Cassol','Ibi','Jalingo','Karin-Lamido','Kurmi','Lau','Sardauna','Takum','Ussa','Wukari','Yorro','Zing']
			   },
			   
			   yobe: {
			     text: ['','Bade','Bursari','Damaturu','Fika','Fune','Geidam','Gujba','Gulani','Jakusko','Karasuwa','Karawa','Machina','Nangere','Nguru Potiskum','Tarmua','Yunusari','Yusufari']
			   },
			   
			   zamfara: {
			       text: ['','Anka ','Bakura','Birnin Magaji','Bukkuyum','Bungudu','Gummi','Gusau','Kaura','Namoda','Maradun','Maru','Shinkafi','Talata Mafara','Tsafe','Zurmi' ]
			   },
			   
			   fct: {
			    text: ['','Gwagwalada','Kuje', 'Abaji', 'Abuja Municipal', 'Bwari', 'Kwali']
			   }
			   
			 
			
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['demoForm'];
    
    // reference to controlling select list
    var sel = form.elements['category'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'choices[]';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};



function saveform() {
	
	if(typeofwindow.sessionStorage === "undefined") {
		return;
	}
	saveValues("input");
	saveValues("select");
	return true;
}

function loadForm() {
	
	if(typeofwindow.sessionStorage === "undefined"){
		return;
	}
	
	setValues("input");
	setValues(select);
}

function saveValues(tag){
	
	var inputs=document.getElementsByTagname(tag);
	for (var i=0; i < inputs.length; i++){
		window.sessionStorage.setItem(inputs[i].name,inputs[i].value);
	}
}

function setValues(tag){
	var inputs=document.getElementsByTagname(tag);
	for(var i=0; i<input.length; i++){
		inputs[i].value = window.sessionStorage.getItem(inputs[i].name);
	}
}
saveform();
loadForm();
saveValues(tag);







function showValues() {
	var str = $("form").serialize();
}
$("select"). on ("change", showValues);
showValues();




function preview(){
frame.src = URL.createObjectURL(event.target.files[0]);
}




if (window.history.replaceState){
	window.history.replaceState(null, null, window.location.href);
}

