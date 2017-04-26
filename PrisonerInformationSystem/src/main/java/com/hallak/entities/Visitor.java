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
@Getter
@Setter
@Entity
@Table(name = "visitor")
@NoArgsConstructor
public class Visitor {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private int Id;

    private String firstName;

    private String lastName;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATETIME")
    private Date birthDate;

    private Gender gender;
}
