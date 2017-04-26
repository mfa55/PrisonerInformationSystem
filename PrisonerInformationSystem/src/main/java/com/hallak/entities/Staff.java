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
@Table(name = "staff")
@NoArgsConstructor
@Getter
@Setter
public class Staff {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private long SSN;

    private String firstName;

    private String lastName;

    private String address;

    private long phoneNumber;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date birthDate;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date hireDate;

    @ManyToOne
    @JoinColumn(name = "locationId")
    private Location location;

    @ManyToOne
    @JoinColumn(name = "managerId")
    private Staff manager;

    @Enumerated(EnumType.STRING)
    private Gender gender;
}
