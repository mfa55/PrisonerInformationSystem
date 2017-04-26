package com.hallak.entities;

import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import java.sql.Date;

/**
 * Created by mrhal on 4/21/2017.
 */
@Entity
@Table(name = "victim")
@Getter
@Setter
@NoArgsConstructor
public class Victim {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private int Id;

    private String firstName;

    private String lastName;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date birthDate;

    private Gender gender;
}
