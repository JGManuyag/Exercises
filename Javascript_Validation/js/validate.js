function validate()
{
	var f = document.forms['add_form']['txt_fname'].value;
	var m = document.forms['add_form']['txt_mname'].value;
	var l = document.forms['add_form']['txt_fname'].value;
	var e = document.forms['add_form']['txt_email'].value;
	var c = document.forms['add_form']['txt_cont'].value;
	var b = document.forms['add_form']['bday'].value;
	var a = document.forms['add_form']['txt_age'].value;
	var g = document.forms['add_form']['sel_gen'].value;

	if(allLetters1(f))
	{
		if(allLetters2(m))
		{
			if(allLetters3(l))
			{
				if(validEmail(e))
				{
					if(allNum1(c))
					{
						if(date(b))
						{
							if(allNum2(a))
							{
								if(gen(g))
								{

								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}
function allLetters1(f)
	{
		var letter1 = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
		if(f.match(letter1))
		{
			return true;
		}
		else
		{
			alert('Please check your firstname.');
			return false;
		}
	}
function allLetters2(m)
	{
		var letter2 = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
		if(m.match(letter2))
		{
			return true;
		}
		else
		{
			alert('Please check your middlename.');
			return false;
		}
	}
function allLetters3(l)
	{
		var letter3 = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
		if(l.match(letter3))
		{
			return true;
		}
		else
		{
			alert('Please check your lastname.');
			return false;
		}
	}
function validEmail(e)
	{
		var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(e.match(email))
		{
			return true;
		}
		else
		{
			alert('Invalid email format!');
			return false;
		}
	}
function allNum1(c)
	{
		var number1 = /^\d+$/;
		if(c.match(number1))
		{
			return true;
		}
		else
		{
			alert('Invalid contact! Please use numbers only!');
			return false;
		}
	}
function date(b)
	{
		if(b = null || b == "")
		{
			alert('Please enter your birthdate.')
			return false;
		}
		else
		{
			return true;	
		}
	}
function allNum2(a)
	{
		var number2 = /^\d+$/;
		if(a.match(number2))
		{
			return true;
		}
		else
		{
			alert('Invalid input! Please enter your age.');
			return false;
		}
	}
function gen(g)
	{
		if(g = null || g =="")
		{
			alert('Please select your gender.');
			return false;
		}
		else
		{
			alert('All information has been saved!');
			
		}
	}
return true;