//Duplicating Menu

$(function () {
    var duplicates = 0,
    //Clones the form in the div
        $original = $('#new-item-box').clone(true);

        function DuplicateForm () {
        var newForm;
        
        duplicates++; 
        //Adding the new form to div link-form
        newForm = $original.clone(true).appendTo($('#link-form'));
        //adding all id attributes with duplicates variable (e.g id=name1)
        $(newForm).attr('id', $(newForm).attr('id')+ duplicates);
        //adding each input in the the cloned form name attributes with duplicates variable (e.g link1)
        $.each($('input', newForm), function(i, item) {            
            $(item).attr('name', $(item).attr('name') + duplicates);
        });
        
        
    }
    
    $('a[href="add-new-form"]').on('click', function (e) {
        e.preventDefault();
        DuplicateForm();
    });
});

$(function () {
    var duplicates1 = 0,
    //Clones the form in the div
        $original1 = $('#new-img-box').clone(true);

        function DuplicateForm1 () {
        var newForm1;
        
        duplicates1++; 
        //Adding the new form to div link-form
        newForm1 = $original1.clone(true).appendTo($('#img-form'));
        //adding all id attributes with duplicates variable (e.g id=name1)
        $(newForm1).attr('id', $(newForm1).attr('id')+ duplicates1);
        //adding each input in the the cloned form name attributes with duplicates variable (e.g img1)
        $.each($('input', newForm1), function(i, item) {            
            $(item).attr('name', $(item).attr('name') + duplicates1);
        });
        
        
    }
    
    $('a[href="add-new-image"]').on('click', function (e) {
        e.preventDefault();
        DuplicateForm1();
    });
});

$(function () {
    var duplicates2 = 0,
        $original2 = $('#new-vid-box').clone(true);

        function DuplicateForm2 () {
        var newForm2;
        
        duplicates2++; 
        //Adding the new form to div link-form
        newForm2 = $original2.clone(true).appendTo($('#vid-form'));
        //adding all id attributes with duplicates variable (e.g id=name1)
        $(newForm2).attr('id', $(newForm2).attr('id')+ duplicates2);
        //adding each input in the the cloned form name attributes with duplicates variable (e.g video1)
        $.each($('input', newForm2), function(i, item) {            
            $(item).attr('name', $(item).attr('name') + duplicates2);
        });
        
        
    }
    
    $('a[href="add-new-video"]').on('click', function (e) {
        e.preventDefault();
        DuplicateForm2();
    });
});

