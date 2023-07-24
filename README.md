Prueba técnica.
-Crea una nueva carpeta en tu sistema para alojar tu proyecto "prueba-tecnica-
php-tunombre"
-Inicializa un nuevo repositorio Git en tu carpeta de proyecto. (al final del
ejercicio deberás enviar el link al repositorio en github)
-Crea un archivo composer.json en tu carpeta de proyecto y agrega las
dependencias necesarias para tu proyecto, como PHPUnit y cualquier otra
dependencia que necesites.
-Configura un archivo phpunit.xml en tu carpeta de proyecto para configurar
PHPUnit.
-Crea una clase User que represente a un usuario en tu sistema. Esta clase
deberá tener atributos para almacenar la información relevante de un usuario,
como su nombre, correo electrónico, contraseña, etc. También deberá tener
métodos para acceder y modificar esta información. Ten en cuenta que será
necesaria la programación orientada a objetos.
-Crea una clase UserRepository que represente el repositorio de usuarios en tu
sistema. Esta clase deberá tener métodos para guardar, actualizar y eliminar
usuarios en el repositorio.
-Crea una clase de test UserTest que utilice PHPUnit para probar la clase User
y asegurarse de que funciona correctamente. Esta clase deberá contener tests
para cada uno de los métodos de la clase User, así como para cualquier otra
funcionalidad relevante.
-Crea el caso de uso para guardar un nuevo usuario en el sistema.
-Se tendrá en consideración si se realiza también un test del caso de uso y de
integración para el repositorio, ejemplo:
public function whenUserIsNotFoundByIdErrorIsThrown():
void
{
$this->expectException(UserDoesNotExistException::class);
$this->userRepository->getByIdOrFail(new Id());
}
-Ejecuta PHPUnit para ejecutar los tests y asegurare de que todo funciona
correctamente.
-Sube el código a Github y envíanos el enlace.
