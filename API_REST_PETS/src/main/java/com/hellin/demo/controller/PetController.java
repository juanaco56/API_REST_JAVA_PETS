package com.hellin.demo.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;
import java.util.List;
import com.hellin.demo.entity.Pet;
import com.hellin.demo.repository.PetRepository;

/**
 * En este controlador se exponen todos los endpoints referentes a Pets
 * @Version 1.0
 * @Autor Juan Antonio Zamora
 */

@RestController
public class PetController {


    private PetRepository petRepository;
/**
 * Constructor del controlador
 * @param petRepository Repositorio para consultar la BD
 */
    public PetController(PetRepository petRepository) {
        this.petRepository = petRepository;
    }   

/**
 * Este método devuelve el listado de pets
 *@return List<Pet> Información de cada mascata
 * 
 */

    @GetMapping ("/listado")
    public List<Pet> hello() {
        return petRepository.findAll();
        
    }

     @PostMapping("/adopt/{id}")
    public Pet adopt(@PathVariable long id) {
        Pet pet = petRepository.findById(id).get();
        pet.setAdopt(true);
        return petRepository.save(pet);
    }
   
    

}

   

