function lettersOnly(input)
{
	var regex 	= /[^a-zA-Z]/gi;
	input.value = input.value.replace(regex, "");
}

function numbersOnly(input)
{
	var regex   = /[^0-9]/gi;
	input.value = input.value.replace(regex, "");
}

function lettersAndDigitsOnly(input)
{
	var regex	= /[^a-zA-Z0-9]/gi;
	input.value	= input.value.replace(regex, "");
}

function validateEmail(input)
{
	var regex	= /[^a-z0-9@._-]/gi;
	input.value = input.value.replace(regex, "");
}

function toLowerCase(input)
{
	input.value = input.value.toLowerCase();
}

function validateUsernameAndPassword(input)
{
	var regex	= /[^a-zA-Z0-9#?.-_<>]/gi;
	input.value	= input.value.replace(regex, "");
}

function validateSearchText(input)
{
	var regex	= /[^a-zA-Z0-9,.- ]/gi;
	input.value	= input.value.replace(regex, "");
}

function resetOnSubmit() {
    document.forms["createCustomerForm"].reset();
}