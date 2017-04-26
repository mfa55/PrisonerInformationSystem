package com.hallak.entities;

import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import org.joda.time.DateTime;
import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import java.sql.Date;

/**
 * Created by mrhal on 4/21/2017.
 */
@Entity
@Table(name = "prisoner")
@NoArgsConstructor
@Getter
@Setter
public class Prisoner {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private long SSN;

    private String firstName;

    private String lastName;

    private Gender gender;

    private int prisonSentence;

    @ManyToOne
    @JoinColumn(name = "locationId")
    private Location location;

    @ManyToOne
    @JoinColumn(name = "cellmateId")
    private Prisoner cellmate;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date entryDate;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date releaseDate;

    @DateTimeFormat(pattern = "dd-MM-yyyy")
    @Column(columnDefinition = "DATE")
    private Date birthDate;

    private String address;

    private long phoneNumber;

    private int phoneCallsAllowed;

    private int visitsAllowed;
}
