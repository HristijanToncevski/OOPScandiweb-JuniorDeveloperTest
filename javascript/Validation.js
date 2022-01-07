$('#product_form').rules("add", {pattern: "[a-zA-Z0-9]+"});

$().ready(function() {
    $("#product_form").validate({
    
    rules:
    {
    sku : 
    {
        required: true,
        pattern:/^[a-zA-Z0-9]+$/,
        maxlength: 15
    },

    name: 
    {
        required: true,
        pattern:/^[a-zA-Z0-9 ]+$/,
        maxlength: 20
    },

    price: 
    {
        required: true,
        pattern:/^[0-9]+$/
    },

    productType:
    {
        required:true
    },

    size:
    {
        required: true,
        pattern:/^[0-9]+$/
    },

    width:
    {
        required: true,
        pattern:/^[0-9]+$/
    },

    height:
    {
        required: true,
        pattern:/^[0-9]+$/
    },

    length:
    {
        required: true,
        pattern:/^[0-9]+$/
    },

    weight:
    {
        required: true,
        pattern:/^[0-9]+$/
    }
    
    },

    messages : 
    {
        sku: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type",
            maxlength: "You can't enter more than 15 letters"
        },
        name: {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type",
            maxlength: "You can't enter more than 20 letters"

        },
        price: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },

        productType:
        {
            required: "Please select product type."
        },

        size: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },

        width: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },

        height: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },
        length: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },
        weight: 
        {
            required: "Please submit required data",
            pattern: "Please provide the data of indicated type"
        },
    },
  });
});
