package com.hallak;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;

@EnableJpaRepositories
@SpringBootApplication
public class PisApplication {

	public static void main(String[] args) {
		SpringApplication.run(PisApplication.class, args);
	}
}
