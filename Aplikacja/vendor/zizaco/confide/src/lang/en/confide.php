<?php

return array(

    'username' => 'Username',
    'password' => 'Password',
    'password_confirmation' => 'Confirm Password',
    'e_mail' => 'Email',
    'username_e_mail' => 'Username or Email',


	'signup' => array(
		'username' => 'Username',
		'e_mail' => 'Pasword',
		'password' => 'Wybierz hasło',
		'username_e_mail' => 'Ussername or password,
        'title' => 'Registration',
        'desc' => 'Register new account',
        'confirmation_required' => '*(e-mail confirmation required)',
        'submit' => 'Create new account',
        'first_name' => 'Name',
        'last_name' => 'Surname',
        'date_of_birth' => 'Date of birth',
        'phone_number' => 'Telefon number',
        'alt_phone_number' => 'Alternative telefon number',
        'country_select' => 'Country',
        'language_select' => 'Language',
        'document_number' => 'Document number',
        'insurance_number' => 'Insurance number',
    ),
	
    'login' => array(
        'title' => 'Login',
        'desc' => 'Enter your credentials',
        'forgot_password' => '(forgot password)',
        'remember' => 'Remember me',
        'submit' => 'Login',
    ),

    'forgot' => array(
        'title' => 'Forgot password',
        'submit' => 'Continue',
    ),

    'alerts' => array(
        'account_created' => 'Your account has been successfully created.',
        'instructions_sent'       => 'Please check your email for the instructions on how to confirm your account.',
        'too_many_attempts' => 'Too many attempts. Try again in few minutes.',
        'wrong_credentials' => 'Incorrect username, email or password.',
        'not_confirmed' => 'Your account may not be confirmed. Check your email for the confirmation link',
        'confirmation' => 'Your account has been confirmed! You may now login.',
        'password_confirmation' => 'The passwords did not match.', 
        'wrong_confirmation' => 'Wrong confirmation code.',
        'password_forgot' => 'The information regarding password reset was sent to your email.',
        'wrong_password_forgot' => 'User not found.',
        'password_reset' => 'Your password has been changed successfully.',
        'wrong_password_reset' => 'Invalid password. Try again',
        'wrong_token' => 'The password reset token is not valid.',
        'duplicated_credentials' => 'The credentials provided have already been used. Try with different credentials.',
    ),

    'email' => array(
        'account_confirmation' => array(
            'subject' => 'Account Confirmation',
            'greetings' => 'Hello :name',
            'body' => 'Please access the link below to confirm your account.',
            'farewell' => 'Regards',
        ),

        'password_reset' => array(
            'subject' => 'Password Reset',
            'greetings' => 'Hello :name',
            'body' => 'Access the following link to change your password',
            'farewell' => 'Regards',
        ),
    ),

);






<?php

return array(

    'username' => 'Nazwa użytkownika',
    'password' => 'Hasło',
    'password_confirmation' => 'Potwierdź hasło',
    'e_mail' => 'E-mail',
    'username_e_mail' => 'Nazwa użytkownika lub Email',

    'signup' => array(
		'username' => 'Wybierz nazwę użtkownika',
		'e_mail' => 'Twój adres e-mail*',
		'password' => 'Wybierz hasło',
		'username_e_mail' => 'Nazwa użytkownika lub Email',
        'title' => 'Rejestracja',
        'desc' => 'Rejestracja nowego konta',
        'confirmation_required' => '*(Wymagane potwierdzenie adresu e-mail)',
        'submit' => 'Utwórz nowe konto',
        'first_name' => 'Imię',
        'last_name' => 'Nazwisko',
        'date_of_birth' => 'Data urodzenia',
        'phone_number' => 'Numer telefonu',
        'alt_phone_number' => 'Alternatywny numer telefonu',
        'country_select' => 'Kraj',
        'language_select' => 'Język',
        'document_number' => 'Numer dokumentu',
        'insurance_number' => 'Numer ubezpieczenia',
    ),

    'login' => array(
        'title' => 'Logowanie',
        'desc' => 'Wprowadź swoje dane',
        'forgot_password' => '(Zapomniałem hasła)',
        'remember' => 'Zapamiętaj mnie',
        'submit' => 'Zaloguj',
    ),

    'forgot' => array(
        'title' => 'Zapomniałem hasła',
        'submit' => 'Dalej',
    ),

    'alerts' => array(
        'account_created' => 'Twoje konto zostało utworzone. Sprawdź skrzynkę pocztową i podążąj za dalszymi instrukcjami aby potwierdzić swój adress email.',
        'too_many_attempts' => 'Zbyt dużo prób logowania. Spróbuj ponownie za kilka minut.',
        'wrong_credentials' => 'Niepoprawna nazwa użytkownika, email lub hasło.',
        'not_confirmed' => 'Twoje konto nie jest potwierdzone. Sprawdź skrzynkę pocztową i kliknij w link potwierdzający.',
        'confirmation' => 'Twoje konto zostało potwierdzone! Teraz możesz się zalogować.',
        'wrong_confirmation' => 'Niepoprawny kod potwierdzający.',
        'password_forgot' => 'Informacja o zmianie hasła została wysłana na twój adres email.',
        'wrong_password_forgot' => 'Użytkownik nie istnieje.',
        'password_reset' => 'Twoje hasło zostało zmienione.',
        'wrong_password_reset' => 'Niepoprawne hasło. Spróbuj ponownie.',
        'wrong_token' => 'Token resetowania hasła jest niepoprawny.',
        'duplicated_credentials' => 'Nazwa użytkownika lub adres email jest już zajęty. Spróbuj podając inne dane.',
    ),

    'email' => array(
        'account_confirmation' => array(
            'subject' => 'Potwiedzenie konta',
            'greetings' => 'Witaj :name,',
            'body' => 'Proszę kliknij w poniższy link, aby potwierdzić swoje konto.',
            'farewell' => 'Z pozdrowieniami,',
        ),

        'password_reset' => array(
            'subject' => 'Zmiana hasła',
            'greetings' => 'Witaj :name,',
            'body' => 'Aby go aktywować nowe hasło, kliknij w poniższy link:',
            'farewell' => 'Z pozdrowieniami,',
        ),
    ),

);
