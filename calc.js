function calcFee()
{
    // Set the value for Perfect Realty's packages
    var proPack = 299;
    var expertPack = 499;

    // Gather the Selling Price
    var sellPrice = document.getElementById('sellingPrice').value;

    // Gather the agent fee
    var agentFee = document.getElementById('feePercentage').value;

    // Strip any non numeric characters
    sellPrice = sellPrice.replace(/[^\d]/g, '');

    // Calculate what the agent fee would cost based on the selling cost
    var agentCharge = Math.floor(sellPrice * (agentFee / 100));

    // Calculate the savings for the Pro Lister Pack
    var proListerSavings = (agentCharge - proPack);

    // Format the number with a comma for currency
    proListerSavings = proListerSavings.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // Display the Pro Lister Pack Savings
    document.getElementById("proListerPackageSavings").textContent = '$' + proListerSavings;


    // Calculate the savings for the Expert Pack
    var expertPackSavings = (agentCharge - expertPack);

    // Format the number with a comma for currency
    expertPackSavings = expertPackSavings.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // Display the Pro Lister Pack Savings
    document.getElementById("expertSellerPackageSavings").textContent = '$' + expertPackSavings;
    
    // Format the number with a comma for currency
    agentCharge = agentCharge.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // Display the agent fee in a currency format
    document.getElementById("agentFee").textContent= '$' + agentCharge;
}