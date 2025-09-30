# 🐾 Pet Adoption API

¡Bienvenido al proyecto **Pet Adoption API**! 🚀  
Este proyecto está desarrollado en **Spring Boot** y tiene como objetivo facilitar la adopción de mascotas de una forma sencilla y eficiente.  
Por ahora, podrás consultar mascotas disponibles y adoptar, ¡pero próximamente podrás añadir nuevas mascotas para que otros las encuentren y adopten!

---

## 📋 Características actuales

- **Listar mascotas disponibles para adopción**  
- **Adoptar una mascota** (¡Encuentra tu nueva compañía!)

Próximamente:
- **Añadir mascotas** (para que puedan ser adoptadas por otros usuarios)

---

## 🛠️ Tecnologías usadas

- **Spring Boot**: Backend rápido y robusto
- **Java 17+**
- **Maven**: Gestión de dependencias y construcción
- **H2 Database**: Base de datos en memoria para pruebas (puedes cambiar a MySQL/Postgres fácilmente)
- **Spring Data JPA**: ORM para manejar la persistencia

---

## ▶️ Cómo ejecutar el proyecto

1. **Clona el repositorio:**  
   ```bash
   git clone https://github.com/tu-usuario/pet-adoption-api.git
   cd pet-adoption-api
   ```

2. **Arranca el proyecto:**  
   ```bash
   mvn spring-boot:run
   ```

3. **Accede a la API:**  
   Normalmente estará disponible en [http://localhost:8080](http://localhost:8080)

---

## 📚 Endpoints principales

| Método | Endpoint           | Descripción             |
|--------|--------------------|-------------------------|
| GET    | `/pets`            | Listar mascotas         |
| POST   | `/pets/{id}/adopt` | Adoptar una mascota     |
| POST   | `/pets`            | (Próximamente) Añadir mascota |

---

## 🚀 Ejemplo de uso

### Listar mascotas
```bash
curl -X GET http://localhost:8080/pets
```

### Adoptar una mascota
```bash
curl -X POST http://localhost:8080/pets/1/adopt
```

---

## 💡 Próximos pasos

- Añadir endpoint para **agregar mascotas**
- Mejorar la validación y feedback
- Interfaz web con React (¡quién sabe!)
- Autenticación de usuarios

---

## 🤝 Contribuir

¡Toda ayuda es bienvenida!  
Si tienes ideas o mejoras, abre un issue o haz un pull request.

---

## 🐶🐱 ¡Encuentra tu mascota ideal y vive la experiencia de la adopción digital! 💙
