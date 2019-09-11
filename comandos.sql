use app_contador;

SELECT * FROM contador;

INSERT INTO contador values (null,'Vezes que apaguei/acendi a luz', 0);

UPDATE contador SET numero=numero+1 WHERE codigo=1;

UPDATE contador SET numero=numero-1 WHERE codigo=2;